<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @var int $id
 */
class Locomotive extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'locomotives';

    public const FIELD_ID = 'id';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_ID
    ];
}
