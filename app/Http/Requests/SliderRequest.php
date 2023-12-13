<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
  

        public function authorize()
        {
            return true;
        }
    
        public function rules()
        {
            return [
                'title'                 => 'required|min:2|max:99|unique:faq,title,'.$this->id,
            ];
        }
    
        public function messages()
        {
            return [
                'title.required'            => 'Slider başlığını giriniz',
                'title.max'                 => 'Slider başlığı en fazla 99 karakter olabilir',
                'title.min'                 => 'Slider başlığı en az 2 karakter olabilir',
                'title.unique'              => 'Slider başlığı daha önce eklenmiş',
               
            ];
        }
    }

