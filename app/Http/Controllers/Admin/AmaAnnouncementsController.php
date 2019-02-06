<?php

namespace App\Http\Controllers\Admin;

use App\AmaAnnouncement;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AmaAnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ama_announcements = AmaAnnouncement::all();

        return view('ama_announcements.index')
            ->with('ama_announcements', $ama_announcements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ama_announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'title' => 'required',
            'text' => 'required',
            'user_id',

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect('admin/ama_announcements/create')
                ->withErrors($validator);
        } else {
            $ama_announcements = new AmaAnnouncement;
            $ama_announcements->title = Input::get('title');
            $ama_announcements->text = Input::get('text');
            $ama_announcements->user_id = Auth::id();

            $ama_announcements->save();

            return redirect('admin/ama_announcements')->with('message', 'Successfully created announcement!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $ama_announcements = AmaAnnouncement::find($id);

        return view('ama_announcements.show')
            ->with('ama_announcements', $ama_announcements);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $ama_announcements = AmaAnnouncement::find($id);

        return view('ama_announcements.edit')
            ->with('ama_announcements', $ama_announcements);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $rules = array(
            'title' => 'required',
            'text' => 'required',
            'user_id',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect('admin/ama_announcements/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            $ama_announcements = AmaAnnouncement::find($id);
            $ama_announcements->title = Input::get('title');
            $ama_announcements->text = Input::get('text');

            $ama_announcements->save();

            return redirect('admin/ama_announcements')->with('message', 'Successfully updated announcement!');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $ama_announcements = AmaAnnouncement::find($id);
        $ama_announcements->delete();

        return redirect('admin/ama_announcements')->with('message', 'Successfully deleted announcement!');
    }
}
