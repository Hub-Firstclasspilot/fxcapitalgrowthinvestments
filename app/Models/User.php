<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar',
        'firstname',
        'lastname',
        'email',
        'country',
        'username',
        'phone',
        'account_type',
        'account_currency',
        'promotion',
        'sms_market',
        't_and_c',
        'password',
        'unhashed_password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function account()
    {
        return $this->hasOne(Account::class);
    }

    public function deposits()
    {
        return $this->hasMany(Deposits::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawals::class);
    }

    public function trades()
    {
        return $this->hasMany(Trade::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
