<?php

namespace App\Http\Requests\API;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use InfyOm\Generator\Request\APIRequest as APIVendorRequest;

abstract class APIRequest extends APIVendorRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    abstract public function rules();

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    abstract public function authorize();
    /**
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */


    /**
     * Response for validate error request
     * @param array $data
     * @return JsonResponse
     */

    private function responseErrors($data = [], $status = 422)
    {
        $response = [
            'errors' => $data,
            'success' => false
        ];

        return response()
            ->json($response, $status);
    }

    /**
     * Return pretty errors for response
     * @param Validator $validator
     * @return array
     */

    private function formatErrors(Validator $validator)
    {
        $messages = $validator->errors()->getMessages();
        $errors = [];
        foreach ($messages as $field => $message) {
            $errors[] = $this->formatValidationErrors($field, $message);
        }

        return $errors;
    }

    /**
     * Formatted error for validate response
     * @param $field
     * @param $message
     * @return array
     */

    private function formatValidationErrors($field, $message)
    {
        $error = [
            'field' => $field,
            'message' => $message
        ];

        return $error;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            $this->responseErrors($this->formatErrors($validator))
        );
    }
}
