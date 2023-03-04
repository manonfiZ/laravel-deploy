<?php

namespace App\akEminenceGroup\Users\Requests;

use App\akEminenceGroup\Base\Requests\BaseFormRequest;

class LoginRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }
}
