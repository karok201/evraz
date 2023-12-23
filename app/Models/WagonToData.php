<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WagonToData extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'wagon_to_data';

    public const FIELD_ID               = 'id';
    public const FIELD_WAGON_ID         = 'wagon_id';
    public const FIELD_DATA_ID          = 'data_id';
    public const FIELD_IDLE_DAYS_LENGTH = 'idle_days_length';
    public const FIELD_STATE            = 'state';
    public const FIELD_CARGO            = 'cargo';
    public const FIELD_POSITION         = 'position';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_WAGON_ID,
        self::FIELD_DATA_ID,
        self::FIELD_IDLE_DAYS_LENGTH,
        self::FIELD_STATE,
        self::FIELD_CARGO,
        self::FIELD_POSITION
    ];

    public function wagon(): BelongsTo
    {
        return $this->belongsTo(Wagon::class, self::FIELD_WAGON_ID, Wagon::FIELD_ID);
    }

    public function stationData(): BelongsTo
    {
        return $this->belongsTo(StationData::class, self::FIELD_DATA_ID, StationData::FIELD_ID);
    }
}
