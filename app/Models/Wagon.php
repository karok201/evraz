<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @var int $id
 * @var string $name
 * @var bool $is_sick
 * @var int $owner_id
 * @var bool $is_with_hatch
 * @var float $load_capacity
 * @var int $days_to_repair
 * @var int $kilometers_left
 * @var bool $is_dirty
 * @var string $first_note
 * @var string $second_note
 *
 * @var Owner $owner
 * @var WagonType $type
 */
class Wagon extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'wagons';

    public const FIELD_ID              = 'id';
    public const FILED_NAME            = 'name';
    public const FIELD_IS_SICK         = 'is_sick';
    public const FIELD_OWNER_ID        = 'owner_id';
    public const FIELD_IS_WITH_HATCH   = 'is_with_hatch';
    public const FIELD_LOAD_CAPACITY   = 'load_capacity';
    public const FIELD_DAYS_TO_REPAIR  = 'days_to_repair';
    public const FIELD_KILOMETERS_LEFT = 'kilometers_left';
    public const FIELD_IS_DIRTY        = 'is_dirty';
    public const FIELD_FIRST_NOTE      = 'first_note';
    public const FIELD_SECOND_NOTE     = 'second_note';
    public const FIELD_TYPE_ID         = 'type_id';
    public const FIELD_TYPE            = 'type';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FILED_NAME,
        self::FIELD_IS_SICK,
        self::FIELD_OWNER_ID,
        self::FIELD_IS_WITH_HATCH,
        self::FIELD_LOAD_CAPACITY,
        self::FIELD_DAYS_TO_REPAIR,
        self::FIELD_KILOMETERS_LEFT,
        self::FIELD_IS_DIRTY,
        self::FIELD_FIRST_NOTE,
        self::FIELD_SECOND_NOTE,
        self::FIELD_TYPE_ID
    ];

    /**
     * Get Owner of Wagon
     *
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class, self::FIELD_OWNER_ID, Owner::FIELD_ID);
    }

    /**
     * Get Type of Wagon
     *
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(WagonType::class, self::FIELD_TYPE_ID, WagonType::FIELD_ID);
    }
}
