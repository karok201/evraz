<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class WagonType extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'wagon_types';

    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_ID,
        self::FIELD_NAME
    ];
}
