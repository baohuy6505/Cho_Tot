<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $dataCategory = Category::with('posts')->get();
        return View('admin.category.index', compact('dataCategory'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
        ]);
        $checkNameCategory = Category::where('name', $validatedData['name'])->first();
        if ($checkNameCategory) {
            return redirect()->route('admin.category.list')->with('error', 'Tên Category đã tồn tại');
        }
        $slug = Str::slug($validatedData['name']);
        $validatedData['slug'] = $slug;
        Category::create($validatedData);
        return redirect()->route('admin.category.list')->with('success', 'Tạo Category thành công');
    }

    public function delete($id)
    {
        $dataCategory = Category::find($id);
        if (!$dataCategory) {
            return redirect()->route('admin.category.list')->with('error', 'Category không tồn tại');
        }
        $dataCategory->delete();
        return redirect()->route('admin.category.list')->with('success', 'Xóa Category thành công');
    }
}
