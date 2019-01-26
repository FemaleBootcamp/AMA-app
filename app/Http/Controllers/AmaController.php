<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Ama as Ama;

class AmaController extends BaseController
{
    public function index()
    {
        $amas = Ama::all();
        $imageUrl = 'img/home-bg.jpg';

        return view('index', ['amas' => $amas, 'imageUrl' => $imageUrl]);
    }

}

