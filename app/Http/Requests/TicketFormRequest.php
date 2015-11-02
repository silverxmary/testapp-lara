<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TicketFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;// in false it will not be able to send the request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        'title' => 'required|min:3',
        'content'=> 'required|min:10',
        ];
    }
}
