<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Request;

class RecordsController extends Controller
{
    public function getRecord( $id ){
        $record = Record::where('id', '=', $id)->first();

    return response()->json( $record );
    }
}