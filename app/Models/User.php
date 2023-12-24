<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property int $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $postal
 * @property string $about
 * @property string $remember_token
 * @property string $email_verified_at
 * @property bool $is_admin
 * @property int $station_id
 *
 * @property Station $station
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    public const TABLE_NAME = 'users';

    public const FIELD_ID                = 'id';
    public const FIELD_USERNAME          = 'username';
    public const FIELD_FIRSTNAME         = 'firstname';
    public const FIELD_LASTNAME          = 'lastname';
    public const FIELD_EMAIL             = 'email';
    public const FIELD_PASSWORD          = 'password';
    public const FIELD_ADDRESS           = 'address';
    public const FIELD_CITY              = 'city';
    public const FIELD_COUNTRY           = 'country';
    public const FIELD_POSTAL            = 'postal';
    public const FIELD_ABOUT             = 'about';
    public const FIELD_REMEMBER_TOKEN    = 'remember_token';
    public const FIELD_EMAIL_VERIFIED_AT = 'email_verified_at';
    public const FIELD_IS_ADMIN          = 'is_admin';
    public const FIELD_STATION_ID        = 'station_id';

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::FIELD_USERNAME,
        self::FIELD_FIRSTNAME,
        self::FIELD_LASTNAME,
        self::FIELD_EMAIL,
        self::FIELD_PASSWORD,
        self::FIELD_ADDRESS,
        self::FIELD_CITY,
        self::FIELD_COUNTRY,
        self::FIELD_POSTAL,
        self::FIELD_ABOUT,
        self::FIELD_IS_ADMIN,
        self::FIELD_STATION_ID
    ];

    protected $hidden = [
        self::FIELD_PASSWORD,
        self::FIELD_REMEMBER_TOKEN,
    ];

    protected $casts = [
        self::FIELD_EMAIL_VERIFIED_AT => 'datetime',
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
    * @return string
    */
    public function setPasswordAttribute($value): string
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function station(): BelongsTo
    {
        return $this->belongsTo(Station::class, self::FIELD_STATION_ID, Station::FIELD_ID);
    }
}
