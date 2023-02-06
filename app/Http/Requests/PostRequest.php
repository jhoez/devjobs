<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;// true para autorizar de lo contrario false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //'username'=>['require','max:100']
        ];
    }

    /**
     * cambia nombre de attributes
    */
    public function attributes()
    {
        return [
            //'username' => 'Nombre de Usuario'// Es solo un ejemplo
        ];
    }

    /**
     * personaliza los mensaje de cada campo
    */
    public function messages()
    {
        return [
            'username.required'=>'hola menol todo bien, resp: sisa mano'
        ];
    }
}

/**
 * importar la clase request creada
 *      use App\Http\Request\PostRequest
 * 
 * en el metodo store() cambiar el parametro
 * en este caso el tipo de dato request por la clase request creada PostRequest
*/