<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'adresse' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'nullable|email',
            'profession' => 'required|string',
            'entreprise' => 'nullable|string',
            'message' => 'nullable|string',
        ];
    }
}
