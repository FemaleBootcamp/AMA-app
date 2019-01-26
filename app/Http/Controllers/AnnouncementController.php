<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\AmaAnnouncement as Announcement;

class AnnouncementController extends BaseController
{
    public function index()
    {
        $imageUrl = 'img/post-bg.jpg';
        $announcement =Announcement::doesntHave('amas')->orderBy('created_at', 'DESC')->first();

        return view('announcement', ['announcement' => $announcement, 'imageUrl' => $imageUrl ]);
    }
}
