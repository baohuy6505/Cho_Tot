<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
            'name'  => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        // ktr trùng tên
        if (Category::where('name', $validatedData['name'])->exists()) {
            return redirect()
                ->route('admin.category.list')
                ->with('error', 'Tên Category đã tồn tại');
        }

        //tạo slug
        $validatedData['slug'] = Str::slug($validatedData['name']);

        //uload ảnh nếu có
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('category_images', 'public');
            $validatedData['image'] = '/storage/' . $path;
        }

        Category::create($validatedData);
        return redirect()
            ->route('admin.category.list')
            ->with('success', 'Tạo Category thành công');
    }

     public function delete($id)
    {
        $dataCategory = Category::find($id);
        if (!$dataCategory) {
            return redirect()
                ->route('admin.category.list')
                ->with('error', 'Category không tồn tại');
        }
        //xoas ảnh nếu có
        if ($dataCategory->image) {
            $relative = preg_replace('#^/storage/#', '', $dataCategory->image);
            $relative = ltrim($relative, '/');

            if (Storage::disk('public')->exists($relative)) {
                Storage::disk('public')->delete($relative);
            }
        }
        $dataCategory->delete();
        return redirect()
            ->route('admin.category.list')
            ->with('success', 'Xóa Category thành công');
    }
}
