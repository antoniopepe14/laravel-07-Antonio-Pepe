<?php

namespace App\Http\Requests;

use App\Http\Requests\GameStorerequest;
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
            "price"=> "required|integer",
            "img"=> "images"
        ];
    }
    public function message(){
        return [
            "title.required"=>'Campo Obbligatorio',
            "title.min"=>'Il titolo deve contenere almeno due caratteri',
            "description.required"=>'Campo Obbligatorio',
            "price.required"=>'Campo Obbligatorio',
            "price.integer"=>'Il prezzo deve essere intero',
            "img.images"=>'Il file deve essere un immagine',
        ];
    }
}
