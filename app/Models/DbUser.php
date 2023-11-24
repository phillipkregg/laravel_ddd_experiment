<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\DbUser
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbUser whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DbUser extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;


    protected $table = 'users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
