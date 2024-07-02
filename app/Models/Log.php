<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const CREATE_ACCOUNT = 'create account and profile';
    public const UPDATE_ACCOUNT = 'update account';
    public const DELETE_ACCOUNT = 'delete account and profile';
    public const REMOVE_PROFILE_IMG = 'remove profile image';
    public const UPDATE_PROFILE = 'update profile';
    public const DELETE_SUPERADMIN = 'attempt to delete superadmin';
    public const UPDATE_PUBLIC_NEWS = 'update public news';
    public const UPDATE_MEMBER_ONLY_NEWS = 'update member only news';
    public const UPDATE_PUBLIC_STATUS_NEWS = 'update public news status';
    public const UPDATE_MEMBER_ONLY_STATUS_NEWS = 'update member only news status';


    public function causer()
    {
        return $this->belongsTo(User::class, 'causer_id');
    }

    public function target()
    {
        return $this->belongsTo(User::class, 'target_id');
    }
}
