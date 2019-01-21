<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Ama as Ama;
use App\ViewModel as ViewModel;

class AmaController extends BaseController
{
    public function index()
    {
        $vm = new ViewModel();
        $vm->data = Ama::all();
        $vm->imageUrl = 'img/home-bg.jpg';

        return view('index', ['vm' => $vm]);
    }

}

