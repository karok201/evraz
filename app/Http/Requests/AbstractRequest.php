<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class AbstractRequest extends FormRequest
{
    public const RULE_REQUIRED = 'required';
    public const RULE_ARRAY = 'array';
    public const RULE_STRING = 'string';
    public const RULE_NUMERIC = 'numeric';

    public function authorize(): bool
    {
        return true;
    }
}
