<?php

namespace App\akEminenceGroup\Categories\Requests;

use App\akEminenceGroup\Base\Requests\BaseFormRequest;

class AddOrEditCategoryRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string'
        ];
    }
}
