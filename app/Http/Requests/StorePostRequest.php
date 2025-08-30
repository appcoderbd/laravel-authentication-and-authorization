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
            'title' => 'required|max:70|string|min:5',
            'content' => 'nullable|max:250',
            'post_image' => 'nullable|image|mimes:png,jpg,gif,jpeg|max:2048'
        ];
    }


    public function messages(): array
    {
        return[

            // User error message-------------------------------
            'user_id.required' => 'User ID is required.',
            'user_id.integer'  => 'User ID must be a valid number.',
            'user_id.exists'   => 'Selected user does not exist.',

            // Title error message-------------------------------
            'title.required' => 'Title is required.',
            'title.string'   => 'Title must be a valid text.',
            'title.max'      => 'Title cannot exceed 70 characters.',
            'title.min'      => 'Title must be at least 5 characters.',

            // Content error message-------------------------------
            'content.max'    => 'Content cannot exceed 250 characters.',

            // Image error message-------------------------------
            'post_image.image' => 'Post image must be a valid image file.',
            'post_image.mimes' => 'Post image must be a file of type: png, jpg, gif, jpeg.',
            'post_image.max'   => 'Post image size cannot exceed 2MB.',
        ];
    }
}