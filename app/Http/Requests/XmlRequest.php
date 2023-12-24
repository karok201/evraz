<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XmlRequest extends AbstractRequest
{
    public const FIELD_STATION_ID = 'station_id';

    public function rules(): array
    {
        return [
            self::FIELD_STATION_ID => [
                self::RULE_REQUIRED
            ]
        ];
    }
}
