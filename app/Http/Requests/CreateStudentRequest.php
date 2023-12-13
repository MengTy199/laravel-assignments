<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            'image' => 'required|unique:tbl_students|max:255',
            'student_id' => 'required|unique:tbl_students|max:255',
            'name' => 'required',
            'age' => 'required', 
            'gender' => 'required',
            'major' => 'required',
            'batch' => 'required',
        ];
    }
}
