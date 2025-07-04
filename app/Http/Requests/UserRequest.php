<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = $this->input('id');
        return [
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,' . (($id) ? $id :null) . ',id',
            'password' => 'nullable|required_if:id,null|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return[
            'password.required_if'  => 'The password field is required.'
        ];
    }
}
