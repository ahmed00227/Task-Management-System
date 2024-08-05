<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'required|string|max:250',
            'description' => 'required|string|max:1000',
            'team_id' => 'required|numeric',
            'dead_line' => 'required|date|after_or_equal:today',
        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'Title of the task is required.',
            'title.string' => 'Title of the task must be a string.',
            'title.max' => 'Title of the task must be of max 250 characters.',
            'description.required' => 'Description of the task is required.',
            'description.string' => 'Description of the task must be a string.',
            'description.max' => 'Description of the task must be of max 1000 characters.',
            'dead_line.required' => 'Dead Line Of the Task Must be provided',
            'dead_line.date' => 'Dead Line Should be a date.',
            'dead_line.after_or_equal' => 'Dead Line Should be a date In the future.',
            'team_id.required' => 'The team id must be provided.',
            'team_id.numeric' => 'the team id must be a numeric value.',
        ];
    }
}
