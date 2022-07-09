<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'users_id',
        'photo',
        'role',
        'contact_number',
        'biography',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    //one to one user to detail_user
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    //one to many detail_user to experience_user
    public function experience_user()
    {
        return $this->hasMany('App\Models\ExperienceUser', 'detail_user_id');
    }
}
