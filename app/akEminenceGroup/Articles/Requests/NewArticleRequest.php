<?php

namespace App\akEminenceGroup\Articles\Requests;

use App\akEminenceGroup\Base\Requests\BaseFormRequest;

class NewArticleRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'numeric'
        ];
    }
}
