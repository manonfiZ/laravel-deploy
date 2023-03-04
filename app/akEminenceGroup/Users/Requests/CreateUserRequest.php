<?php

namespace App\akEminenceGroup\Users\Requests;

use App\akEminenceGroup\Base\Requests\BaseFormRequest;

class CreateUserRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ];
    }
}
