<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LocomotiveToData extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'locomotive_to_data';

    public const FIELD_ID            = 'id';
    public const FIELD_LOCOMOTIVE_ID = 'locomotive_id';
    public const FIELD_DATA_ID       = 'data_id';
    public const FIELD_DIRECTION     = 'direction';

    public const DIRECTION_LEFT = 'LEFT';
    public const DIRECTION_RIGHT = 'RIGHT';

    public function locomotive(): BelongsTo
    {
        return $this->belongsTo(Locomotive::class, self::FIELD_LOCOMOTIVE_ID, Locomotive::FIELD_ID);
    }

    public function stationData(): BelongsTo
    {
        return $this->belongsTo(StationData::class, self::FIELD_DATA_ID, StationData::FIELD_ID);
    }
}
