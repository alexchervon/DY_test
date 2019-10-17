<?php

namespace App\Http\Requests\API;

class CreateFileAPIRequest extends APIRequest
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
            'file' => 'required',
        ];
    }
}
