<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return \Auth::check;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'credentials' => 'required|max:255',
            'parent_credentials' => 'required|max:255',
            'age' => 'required',
            'date_of_birth' => 'nullable',
            'phone_number' => 'required',
            'parent_phone_number' => 'required',
            'school_time' => 'required',
            'stud_length' => 'required',
            'lessons_in_week' => 'required',
            'lesson_length' => 'required',
            'lesson' => 'required',
            'instrument_rent' => 'required',
            'comment' => 'nullable'
        ];
    }

    // protected function prepareForValidation()
    // {
    //     if ($this->comment === null) {
    //         $this->merge(['comment' => '']);
    //     }
    // }
}
