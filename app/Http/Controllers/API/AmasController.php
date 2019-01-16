<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Ama;

class AmasController
{
    public function getAma($id)
    {
        $ama = Ama::where('id', '=', $id)->first();
        return response()->json($ama);
    }

}