<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Request;

class RecordsController extends Controller
{
    public function getRecords(){
        $records = Record::all();

    return response()->json( $records );

    }

    public function getRecord( $id ){
        $record = Record::where('id', '=', $id)->first();

    return response()->json( $record );
    }

    public function postNewRecord( ){
    $record = new Record();

    $record->date     = Request::get('date');
    $record->title  = Request::get('title');
    $record->content     = Request::get('content');
    $record->answeredBy    = Request::get('answeredBy');
    $record->tags      = Request::get('tags');

    $record->save();

    return response()->json($record, 201);
    
}
}