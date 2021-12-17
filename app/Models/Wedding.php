<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $table = 'weddings';
    protected $fillable = [
        'slug',
        'title',
        'description',
        'calon_pria',
        'calon_wanita',
        'calon_pria_photo',
        'calon_wanita_photo',
        'theme',
        'package_id'
    ];
    protected $attributes = ['theme' => 'default', 'package_id' => 1];
    protected $with = ['events', 'comments'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }
    public function medias()
    {
        return $this->hasMany('App\Models\Medias');
    }
    public function invitations()
    {
        return $this->hasMany('App\Models\Invitation');
    }
    public function comments()
    {
        return $this->hasManyThrough('App\Models\Comments', 'App\Models\Invitation');
    }
}
