<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AmaController extends BaseController
{
    public function index()
    {
        $vm = new AmaViewModel();

        $ama1 = new Ama();
        $ama1->title = 'Ama 1';
        $ama1->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $ama2 = new Ama();
        $ama2->title = 'Ama 2';
        $ama2->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $ama3 = new Ama();
        $ama3->title = 'Ama 3';
        $ama3->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

        $vm->amas = array($ama1, $ama2, $ama3);
        $vm->imageUrl = 'img/home-bg.jpg';

        return view('index', ['vm' => $vm]);
    }

}

class Ama
{
    public $title;
    public $text;
}

class AmaViewModel
{
    public $amas;
    public $imageUrl;
}
