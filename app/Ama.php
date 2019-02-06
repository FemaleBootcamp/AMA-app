<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ama extends Model
{
    protected $table = 'amas';
    protected $fillable = ['title', 'content', 'tags','created_at'];

    public function amaAnnouncement()
    {
        return $this->belongsTo('App\AmaAnnouncement');
    }
}