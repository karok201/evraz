<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StationData extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'station_data';

    public const FIELD_ID = 'id';
    public const FIELD_STATION_ID = 'station_id';
    public const FIELD_PARK_ID = 'park_id';
    public const FIELD_WAY_ID = 'way_id';
    public const FIELD_MAX_CARRIAGES_COUNT = 'max_carriages_count';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_ID,
        self::FIELD_STATION_ID,
        self::FIELD_PARK_ID,
        self::FIELD_WAY_ID,
        self::FIELD_MAX_CARRIAGES_COUNT
    ];

    public function park(): BelongsTo
    {
        return $this->belongsTo(Park::class, self::FIELD_PARK_ID, Park::FIELD_ID);
    }

    public function wagonsToData(): HasMany
    {
        return $this->hasMany(WagonToData::class, WagonToData::FIELD_DATA_ID, self::FIELD_ID);
    }

    public function way(): BelongsTo
    {
        return $this->belongsTo(Way::class, self::FIELD_WAY_ID, Way::FIELD_ID);
    }
}
