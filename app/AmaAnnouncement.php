<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmaAnnouncement extends Model
{
    protected $table = 'ama_announcements';

    public function amas()
    {
        return $this->hasMany('App\Ama');
    }

}
