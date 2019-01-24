<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AmaAnnouncement;
use View;
use Session;
use Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AmaAnnouncementsController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
    {
        // get all announcements
        $ama_announcements = AmaAnnouncement::all();

        // load the view and pass the announcment
        return View::make('ama_announcements.index')
            ->with('ama_announcements', $ama_announcements);
    }

    
        /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/resources/views/ama_announments/create.blade.php)
        return View::make('ama_announcements.create');
    }
    
        /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'text'      => 'required',
            'user_id'       => 'required',
            'created_at'     => 'required' ,
            'updated_at'     ,
            
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('ama_announcements/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $ama_announcements = new AmaAnnouncement;
            $ama_announcements->title       = Input::get('title');
            $ama_announcements->text      = Input::get('text');
            $ama_announcements->user_id       = Input::get('user_id');
            $ama_announcements->created_at      = Input::get('created_at');
            $ama_announcements->updated_at       = Input::get('updated_At');
            
            $ama_announcements->save();

            // redirect
            Session::flash('message', 'Successfully created announcement!');
            return Redirect::to('ama_announcements');
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
        // get the announcment
        $ama_announcements = AmaAnnouncement::find($id);

        // show the view and pass the announcement to it
        return View::make('ama_announcements.show')
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
        // get the announcement
        $ama_announcements = AmaAnnouncement::find($id);

        // show the edit form and pass the announcement
        return View::make('ama_announcements.edit')
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
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'text'      => 'required',
            'user_id'       => 'required',
            'created_at'     ,
            'updated_at'       => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('ama_announcements/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $ama_announcements = AmaAnnouncement::find($id);
            $ama_announcements->title       = Input::get('title');
            $ama_announcements->text      = Input::get('text');
            $ama_announcements->user_id      = Input::get('user_id');
            $ama_announcements->created_at      = Input::get('created_at');
            $ama_announcements->updated_at      = Input::get('updated_at');
            
            $ama_announcements->save();

            // redirect
            Session::flash('message', 'Successfully updated announcement!');
            return Redirect::to('ama_announcements');
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
        // delete
        $ama_announcements = AmaAnnouncement::find($id);
        $ama_announcements->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the announcement!');
        return Redirect::to('ama_announcements');
    }
    }