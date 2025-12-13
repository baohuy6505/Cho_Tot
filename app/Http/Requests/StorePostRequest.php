<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|min:5|max:200',
            'description' => 'required|string|min:20|max:1000',
            'price' => 'required|numeric|min:0',
            'address' => 'required|string|max:255',
            'status' => 'required|string|in:pending,active,blocked',
            // QUAN TRỌNG – Rule dành cho mảng ảnh
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Mỗi ảnh không quá 2MB
        ];
    }
    public function messages(): array
    {
        return [
            'required' => 'Trường :attribute không được để trống.',
            'min' => 'Trường :attribute phải có tối thiểu :min ký tự (hoặc giá trị).',
            'max' => 'Trường :attribute chỉ được có tối đa :max ký tự (hoặc giá trị).',
            'string' => 'Trường :attribute phải là chuỗi ký tự.',

            'user_id.exists' => 'ID người dùng không hợp lệ.',
            'category_id.exists' => 'Danh mục đã chọn không tồn tại.',

            'price.numeric' => 'Giá tiền phải là một giá trị số.',
            'price.min' => 'Giá tiền không được nhỏ hơn 0.',

            'status.in' => 'Trạng thái không hợp lệ. Vui lòng chọn một trong các giá trị cho phép.',
            'images.*.image' => 'Tệp tải lên phải là một hình ảnh hợp lệ.',
        ];
    }
}
