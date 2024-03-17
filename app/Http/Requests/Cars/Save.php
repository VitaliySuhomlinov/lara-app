<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Save extends FormRequest
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
        $transmissions = config('app-cars.transmissions');
        return [
            'brand'         => 'required|min:5|max:255',
            'model'         => 'required|min:5|max:500',
            'transmissions' => [ 'required', Rule::in(array_keys($transmissions)) ],
            'description'   => 'required|min:5|max:255'
        ];
    }

    public function attributes()
    {
        return [
            'brand'         => 'Марка',
            'model'         => 'Модель',
            'transmissions' => 'Коробка передач',
            'description'   => 'Описание'
        ];
    }
}
