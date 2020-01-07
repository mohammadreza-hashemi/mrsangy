<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        //for store is Post capital POST 
        if($this->method() == 'POST'){
            return[
                'title' =>'required',
                'body'  =>'required',
                'description'=>'required',
                'images'=>'required|mimes:jpeg,png,gif,bmp,jpg',
            ];
        }else{
            return [
                'title' =>'required',
                'body'  =>'required',
                'description'=>'required',
            ];
        }
        
    }
}
