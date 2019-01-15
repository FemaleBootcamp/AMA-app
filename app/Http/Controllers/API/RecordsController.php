<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Record;

class RecordsController
{
    public function getRecord($id)
    {
        $record = Record::where('id', '=', $id)->first();
        return response()->json($record);
    }

}