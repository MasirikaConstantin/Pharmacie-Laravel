<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProduitControl extends FormRequest
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
            'nom' => ['required', 'string','min:4', 'max:255'],
            'prix' => ['required', 'numeric'],
            'quantite' => ['required', 'int'],
            'commentaire' => ['string','nullable', 'max:555'],
            'categorie_id' => ['required', 'exists:categories,id','nullable'],

        ];
    }
   
    
   
}
