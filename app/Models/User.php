<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    public function getAuthIdentifierName()
{
    return 'school_username';
}
    protected $fillable = [
        'name',
        'subadmin_id',
        'school_username',
        'email',
        'password',
        'u_code',
        'school_code',
        'dise_code',
        'board_name',
        'medium',
        'total_student',
        'contact_number',
        'address',
        'city',
        'state',
        'pincode',
        'locality',
        'website',
        'school_image',
        'status',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];




    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'admin_user');
    }
}
