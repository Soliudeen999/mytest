<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class updateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'string', 'max:255'],
            'employee_id' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(User::find($this->id))],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore(User::find($this->id))],
            'phone_number' => ['required', 'string', 'max:11', 'min:11', Rule::unique('users')->ignore(User::find($this->id))],
            'password' => ['nullable', 'string', 'confirmed', 'min:8'],
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->password == null) {
            $this->request->remove('password');
        }
    }
}
