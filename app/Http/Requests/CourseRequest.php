<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enum\Level;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'subjectArea' => ['required', 'string',],
            'courseName' => ['required', 'string'],
            'courseDetails' => ['required', 'string'],
            'level' => ['required', 'in:'. Level::toString()],
            'year' => ['required'],
            'integrated' => ['required'],
            'IELTS' => ['required'],
            'location' => ['required', 'string'],
            'starting' => ['required', 'string']
        ];
    }

    public function messages(): array
    {
        return [
            'subjectArea' => 'Cannot be an empty field',
            'courseName' => 'Cannot be an empty field',
            'courseDetails' => 'Cannot be an empty field',
            'level' => 'Cannot be an empty field',
            'year' => 'Cannot be an empty field',
            'integrated' => 'Cannot be an empty field',
            'IELTS' => 'Cannot be an empty field',
            'location' => 'Cannot be an empty field',
            'starting' => 'Cannot be an empty field',
        ];
    }
}
