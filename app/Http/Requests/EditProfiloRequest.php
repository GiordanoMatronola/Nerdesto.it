<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditProfiloRequest extends FormRequest
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
            'username' => ['required','string','max:255', Rule::unique('users')->ignore(Auth()->user()->id)],
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'imgProfile' => 'image',
            'genre' => 'required|integer|min:1|max:3',
            'address' => 'required|string|max:300',
            'city' => 'required|string|max:50',
            'country' => 'required|integer|min:1|max:3',
            'telephone' => 'required|string|max:20',
        ];
    }


}


