<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'profile'=> 'mimes:png,jpg,jpeg',
            'name' => 'required|max:70',
            'position' => 'required|max:70',
            'about' => 'min:5'
        ];

        if ($this->isStore()) {
            $rules['profile'] = 'required|mimes:png,jpg,jpeg';
        }

        return $rules;
    }

    protected function isStore(): bool
    {
        return $this->route()->action['as'] === 'members.store';
    }
}
