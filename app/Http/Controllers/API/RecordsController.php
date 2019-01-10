<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Request;
use App\Record;

class RecordsController extends Controller
{
    public function getRecord( $id ){
    return [
        'date' => $this->date,
        'title' => $this->title,
        'content' => $this->content,
        'answeredBy' => $this->answeredBy,
        'tags' => $this->tags,
    ];
    }
   
}