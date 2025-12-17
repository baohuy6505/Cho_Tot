<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('client.payments.index');
    }

    public function webhook(Request $request)
    {
        $amount  = $request->input('amount') ?? $request->input('transferAmount');
        $content = $request->input('content');
        // 2. Kiểm tra bảo mật (SePay có gửi kèm API Key trong Header nếu bạn cài)
        $sepayHeader = $request->header('Authorization');
        // Sửa dòng này để cắt chữ "Apikey " thay vì "Bearer "
        $token = str_replace('Apikey ', '', $sepayHeader);

        if ($token !== env('SEPAY_API_KEY')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        //tach noi dung chuyen khoang lay id
        if (preg_match('/USER(\d+)/i', $content, $matches)) {
            $userId = $matches[1];
            $user = User::find($userId);
            if ($user) {
                $user->balance += (float)$amount;
                $user->save();
                return response()->json(['success' => true]);
            }
        }
        return response()->json(['success' => false]);
    }
}
