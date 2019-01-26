<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ama extends Model
{
    protected $table = 'amas';

    public function amaAnnouncement()
    {
        return $this->belongsTo('App\AmaAnnouncement');
    }
}
