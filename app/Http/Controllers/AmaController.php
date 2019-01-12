<?php
namespace App\Http\Controllers;
ini_set('display_errors', 'On');

use Illuminate\Routing\Controller as BaseController;

class AmaController extends BaseController
{
    public function index()
    {
        return view('index');

    }

}
