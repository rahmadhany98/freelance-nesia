<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'service';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'users_id',
        'title',
        'description',
        'delivery_time',
        'revision_limit',
        'price'.
        'note',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    //one to many user to service
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }
    //one to many service to advantage_user
    public function advantage_user()
    {
        return $this->hasMany('App\Models\AdvantageUser', 'service_id');
    }

    //one to many service to advantage_service
    public function advantage_service()
    {
        return $this->hasMany('App\Models\AdvantageService', 'service_id');
    }

    //one to many service to thumbnail_service
    public function thumbnail_service()
    {
        return $this->hasMany('App\Models\ThumbnailService', 'service_id');
    }

    //one to many service to tagline
    public function tagline()
    {
        return $this->hasMany('App\Models\Tagline', 'service_id');
    }

    //one to many service to order
    public function order()
    {
        return $this->hasMany('App\Models\Order', 'service_id');
    }
}
