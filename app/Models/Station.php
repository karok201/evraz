<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'stations';

    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_ID,
        self::FIELD_NAME
    ];
}
