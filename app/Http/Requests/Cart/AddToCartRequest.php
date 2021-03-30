<?php

namespace App\Http\Requests\Cart;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class AddToCartRequest extends FormRequest
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
            'colors' => 'required_with:mycolor|array',
            'designs' => 'required_with:mydesign|integer',
            'quantity' => 'required|integer',
            'productData' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'colors.required_with' => "s'il vous plaît choisir au moins une couleure",
            'designs.required_with' => "s'il vous plait entrer le numéro du design",
        ];
    }
}
