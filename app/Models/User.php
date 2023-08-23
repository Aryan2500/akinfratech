<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'usertype_id',
        'parent_id',
        'phone',
        'refer_code',
        'parent_refer_code',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function type()
    {
        return $this->belongsTo(Usertype::class, 'usertype_id');
    }

    public function  role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isInvestor()
    {
        return $this->type->name == INVESTOR;
    }

    public function sites()
    {
        return $this->hasMany(Site::class);
    }

    public function investment()
    {
        return $this->hasMany(Investment::class);
    }

    public function farmers()
    {
        return $this->hasManyThrough(Site::class, Farmer::class);
    }

    public static function tree($rootId = null)
    {

        $allUsers = User::get();
        $rootUsers  = $allUsers->where('parent_id', $rootId ? $rootId : 0)->values();
        self::formatTree($rootUsers, $allUsers);

        return $rootUsers;
    }

    public static function formatTree($users, $allUsers)
    {
        foreach ($users as $key => $user) {
            $user->children = $allUsers->where('parent_id', $user->id)->values();

            if ($user->children->isNotEmpty()) {
                self::formatTree($user->children, $allUsers);
            }
        }
    }

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }
}
