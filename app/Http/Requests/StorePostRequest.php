<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user_id == auth()->user()->id) {
            return true;
        }else{
            return false;
        }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $post = $this->route()->parameter('post');

        $rules = [
            'nombre' => 'required',
            'slug' => "required|unique:posts",
            'categoria_id'=>'required',
            'estado' => 'required|in:1,2',
            'file'=> 'required|mimes:png,jpg|max:5048,file,'
        ];

        if ($this->estado == 2) {
            $rules = array_merge($rules, [
                'categoria_id'=>'required',
                'etiquetas'=>'required',
                'cuerpo'=>'required'
            ]);
        }

        return $rules;
    }
}
