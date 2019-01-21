<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Ama;
use Request;

class AmasController extends Controller
{
    public function getAma(Ama $id)
   {
     $ama= Ama::find($id);
     return response()->json($ama);
    }
}