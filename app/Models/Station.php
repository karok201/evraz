<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $role
 */
class Station extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'stations';

    public const FIELD_ID                  = 'id';
    public const FIELD_NAME                = 'name';
    public const FIELD_MAX_CARRIAGES_COUNT = 'max_carriages_count';
    public const FIELD_ROLE                = 'role';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_ID,
        self::FIELD_NAME,
        self::FIELD_MAX_CARRIAGES_COUNT,
        self::FIELD_ROLE
    ];
}
