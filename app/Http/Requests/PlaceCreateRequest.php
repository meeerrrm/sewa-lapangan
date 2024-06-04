<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceCreateRequest extends FormRequest
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
            'name'=>['required'],
            'maps'=>['required'],
            'phone_number'=>['required'],
            'address'=>['required'],
            'photo'=>['required','image','mimes:jpeg,jpg,png,gif'],
            'facilities'=>['required'],

            'field_type'=>['required'],
            'field_number'=>['required'],
            'price_on_hour'=>['required'],
        ];
    }
}
