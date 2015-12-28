<?php

namespace futboleros\Http\Requests;

use futboleros\Http\Requests\Request;

class NoticiasRequest extends Request
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
            'titulo'=>'required',
            'contenido'=>'required',
            'user_id'=>'required'
            
            
           
        ];
    }
}
