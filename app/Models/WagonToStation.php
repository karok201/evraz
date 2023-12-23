<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @deprecated
 *
 * @var int $id
 * @var int $station_id
 * @var int $idle_days_length
 * @var string $state
 * @var string $cargo
 * @var int $position
 *
 * @var Station $station
 * @var Way $way
 * @var Park $park
 */
class WagonToStation extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'wagons_to_stations';

    public const FIELD_ID               = 'id';
    public const FIELD_STATION_ID       = 'station_id';
    public const FIELD_PARK_ID          = 'park_id';
    public const FIELD_WAY_ID           = 'way_id';
    public const FIELD_WAGON_ID         = 'wagon_id';
    public const FIELD_IDLE_DAYS_LENGTH = 'idle_days_length';
    public const FIELD_STATE            = 'state';
    public const FIELD_CARGO            = 'cargo';
    public const FIELD_POSITION         = 'position';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_ID,
        self::FIELD_STATION_ID,
        self::FIELD_IDLE_DAYS_LENGTH,
        self::FIELD_STATE,
        self::FIELD_CARGO,
        self::FIELD_POSITION
    ];

    /**
     * Get Station
     *
     * @return BelongsTo
     */
    public function station(): BelongsTo
    {
        return $this->belongsTo(Station::class, self::FIELD_STATION_ID, Station::FIELD_ID);
    }

    /**
     * Get Way
     *
     * @return BelongsTo
     */
    public function way(): BelongsTo
    {
        return $this->belongsTo(Way::class, self::FIELD_WAY_ID, Way::FIELD_ID);
    }

    /**
     * Get Park
     *
     * @return BelongsTo
     */
    public function park(): BelongsTo
    {
        return $this->belongsTo(Park::class, self::FIELD_PARK_ID, Park::FIELD_ID);
    }
}
