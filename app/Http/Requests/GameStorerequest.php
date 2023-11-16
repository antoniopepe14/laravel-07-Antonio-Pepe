<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameStorerequest extends FormRequest
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
            "title"=> "required|min:2",
            "description"=> "required",
            "price"=> "required|decimal:0,2",
            "img"=> "image",
            "category_id"=>'required'
        ];
    }
    public function messages(){
        return [
            "title.required"=>'Campo Obbligatorio',
            "title.min"=>'Il titolo deve contenere almeno due caratteri',
            "description.required"=>'Campo Obbligatorio',
            "price.required"=>'Campo Obbligatorio',
            "price.decimal"=>'Il prezzo deve essere con due cifre decimali',
            "img.image"=>'Il file deve essere un immagine'
        ];
    }
}
