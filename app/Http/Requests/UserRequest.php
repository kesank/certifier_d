<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'between:5,20|alpha',
            'firstname' => 'between:5,20|alpha',
            'nickname' => 'between:5,20|alpha',
            'company' => 'between:5,20|alpha',
            'phone' => 'between:5,20|alpha',
            'password' => 'between:5,20|alpha',
            'email' => 'email',
            'statut' => 'in:professionel,particulier',
            'profession' => 'in:notaire,agent_immobilier',
        ];
    }
}
