<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'question' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'reference'=>'required|string|max:255'
        ];
    }
}
