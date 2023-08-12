<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'image' => 'mimes:png,jpg,jpeg',
            'title' => 'sometimes|required|max:1000',
            'description' => 'required|min:10',
            'authors' => 'nullable'
        ];

        if ($this->isStore()) {
            $rules['image'] = 'required|mimes:png,jpg,jpeg';
        }

        return $rules;
    }

    protected function isStore(): bool
    {
        return $this->route()->action['as'] === 'news.store';
    }
}
