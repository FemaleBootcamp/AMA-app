<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Announcement as Announcement;
use App\ViewModel as ViewModel;

class AnnouncementController extends BaseController
{
    public function index()
    {
        $vm = new ViewModel();
        $vm->imageUrl = 'img/post-bg.jpg';
        $vm->data = Announcement::all();
        return view('announcement', ['vm' => $vm ]);
    }
}
