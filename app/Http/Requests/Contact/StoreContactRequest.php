<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'form.name' => 'required|string|max:255',
            'form.email' => 'required|email|max:255',
            'form.telegram' => 'nullable|string|max:255',
            'form.message' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'form.name.required' => 'Поле "Имя" обязательно для заполнения',
            'form.name.max' => 'Вы превысили лимит',
            'form.email.requred' => 'Поле Email обязательно для заполения',
            'form.email.max' => 'Ваш email превышает количество допусимых символов',
            'form.telegram.max' => 'Ссылка на telegram не должна превышать 255 символов',
        ];
    }
}
