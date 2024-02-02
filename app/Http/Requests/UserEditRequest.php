<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            'name' => ['required','min:3'],
            'username' => ['required','min:3','unique:users,username,' . $user->id],
            'email' => ['required','unique:users,email,' . request()->route('user')->id],
            'password' => 'sometimes'
        ];
    }
}
