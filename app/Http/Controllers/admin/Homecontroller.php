<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Homecontroller extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $postsByMonth = Post::select(
            DB::raw('MONTH(created_at) as month'),//lay thang tu create_at
            DB::raw('COUNT(*) as total')//dem so luong moi thang
        )
            ->whereYear('created_at', Carbon::now()->year)//loc theo nam
            ->groupBy(DB::raw('MONTH(created_at)'))//gom cac bai theo thang
            ->pluck('total', 'month')//chia ra thanh so bai moi thang: T1 - 5bai
            ->toArray();
        $monthlyPosts = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlyPosts[] = $postsByMonth[$i] ?? 0;
        }
        $active = Post::where('status', 'active')->count();
        $pending = Post::where('status', 'pending')->count();
        $blocked = Post::where('status', 'blocked')->count();
        return view('admin.homeAdmin', compact(
            'totalPosts',
            'monthlyPosts',
            'active',
            'pending',
            'blocked'
        ));
    }
}
