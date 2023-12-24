<?php
declare(strict_types=1);

namespace App\Http\Requests;

class DashboardRequest extends AbstractRequest
{
    public const FIELD_OWNERS = 'owners';
    public const FIELD_STATION = 'station';

    public function rules(): array
    {
        return [
            self::FIELD_OWNERS => [
                self::RULE_ARRAY
            ],
            self::FIELD_OWNERS.'*' => [
                self::RULE_NUMERIC
            ],
            self::FIELD_STATION => [
                self::RULE_NUMERIC
            ]
        ];
    }
}
