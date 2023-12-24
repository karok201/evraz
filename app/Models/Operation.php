<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Operation extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'operations';

    public const FIELD_ID = 'id';
    public const FIELD_START_DATE = 'START_DATE';
    public const FIELD_END_DATE = 'END_DATE';
    public const FIELD_OPERATION_TYPE_ID = 'operation_type_id';
    public const FIELD_DEPARTURE_STATION_ID = 'departure_station_id';
    public const FIELD_DEPARTURE_PARK_ID = 'departure_park_id';
    public const FIELD_DEPARTURE_WAY_ID = 'departure_way_id';
    public const FIELD_DESTINATION_STATION_ID = 'destination_station_id';
    public const FIELD_DESTINATION_PARK_ID = 'destination_park_id';
    public const FIELD_DESTINATION_WAY_ID = 'destination_way_id';
    public const FIELD_STATUS = 'status';
    public const FIELD_SUPPLY_DIRECTION = 'supply_direction';
    public const FIELD_REASON_ID = 'reason_id';

    public const DIRECTION_LEFT = 'LEFT';
    public const DIRECTION_RIGHT = 'RIGHT';

    public const STATUS_ACTIVE = 'Active';
    public const STATUS_FINISHED = 'Finished';
    public const STATUS_ERROR = 'Error';


    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_ID,
        self::FIELD_START_DATE,
        self::FIELD_END_DATE,
        self::FIELD_OPERATION_TYPE,
        self::FIELD_DEPARTURE_STATION_ID,
        self::FIELD_DEPARTURE_PARK_ID,
        self::FIELD_DEPARTURE_WAY_ID,
        self::FIELD_DESTINATION_STATION_ID,
        self::FIELD_DESTINATION_PARK_ID,
        self::FIELD_DESTINATION_WAY_ID,
        self::FIELD_STATUS,
        self::FIELD_SUPPLY_DIRECTION
    ];

    public function departureStation(): BelongsTo
    {
        return $this->belongsTo(Station::class, self::FIELD_DEPARTURE_STATION_ID, Station::FIELD_ID);
    }

    public function departurePark(): BelongsTo
    {
        return $this->belongsTo(Park::class, self::FIELD_DEPARTURE_PARK_ID, Park::FIELD_ID);
    }

    public function departureWay(): BelongsTo
    {
        return $this->belongsTo(Way::class, self::FIELD_DEPARTURE_WAY_ID, Way::FIELD_ID);
    }

    public function destinationStation(): BelongsTo
    {
        return $this->belongsTo(Station::class, self::FIELD_DESTINATION_STATION_ID, Station::FIELD_ID);
    }

    public function destinationPark(): BelongsTo
    {
        return $this->belongsTo(Park::class, self::FIELD_DESTINATION_PARK_ID, Park::FIELD_ID);
    }

    public function destinationWay(): BelongsTo
    {
        return $this->belongsTo(Way::class, self::FIELD_DESTINATION_WAY_ID, Way::FIELD_ID);
    }

    public function reason(): BelongsTo
    {
        return $this->belongsTo(Reason::class, self::FIELD_REASON_ID, Reason::FIELD_ID);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(OperationType::class, self::FIELD_OPERATION_TYPE_ID, OperationType::FIELD_ID);
    }
}
