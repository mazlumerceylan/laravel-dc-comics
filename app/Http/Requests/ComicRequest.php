<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // definisci qui le tue regole di validazione
        ];
    }

    public function messages()
    {
        return [
            // definisci qui i tuoi messaggi di errore personalizzati
        ];
    }
}
