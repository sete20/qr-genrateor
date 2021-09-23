<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class qrCodeForm extends FormRequest
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
            "name"=>'required',
            "body"=>'required',
            "qrSize"=>'required',
            "imageType"=>'required',
            "qrCorrection"=>'required',
            "qrEncoding"=>'required',

        ];
    }
    public function messages()
{
    return [
        'name.required' => 'A name is required',
        'body.required'  => 'A body is required',
        "qrSize.required"=>' qr Size is required',
        "imageType.required"=>' image type is required',
        "qrCorrection.required"=>'qr Correction is required',
        "qrEncoding.required"=>' qr Encoding is required'
    ];
}
}
