<?php

namespace App\Http\Requests\API;

class CreateArticleAPIRequest extends APIRequest
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

    public function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required'
        ];
    }
}
