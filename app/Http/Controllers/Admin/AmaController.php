<?php

namespace App\Http\Controllers\Admin;

use App\Ama;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $tags = DB::table('amas')->select(DB::raw('group_concat(tags) as tags'))->value('tags');

        $tag           = explode(",", $tags);
        $filtered_tags = array_unique($tag);

        $amas = DB::table('amas')->select('id', 'title', 'person', 'tags', 'created_at');

        if ($request->date_from) {
            $amas->where('created_at', '>=', $request->date_from);
        }

        if ($request->date_to) {
            $amas->where('created_at', '<=', $request->date_to);
        }

        if ($request->tags) {
            $amas->where('tags', 'like', "%$request->tags%");
        }

        $amas = $amas->paginate(20);

        return view('ama_list', ['amas' => $amas], ['tags' => $filtered_tags]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ama_announcements = DB::table('ama_announcements')->select('title', 'user_id')->get();

        $tags          = DB::table('amas')->select(DB::raw('group_concat(tags) as tags'))->value('tags');
        $tag           = explode(",", $tags);
        $filtered_tags = array_unique($tag);

        return view('create', ['tags' => $filtered_tags], ['ama_announcements' => $ama_announcements]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $this->validate($request, [
            'title'   => 'required',
            'content' => 'required',
        ]);

        $amas = new Ama();

        $amas->title   = $request->input('title');
        $amas->content = $request->input('content');

        if ($request->tags) {
            $amas->tags = $request->input('tags');
        } else {
            $amas->tags = "";
        }

        $amas->person              = $request->input('person');
        $amas->user_id             = Auth::user()->id;
        $amas->ama_announcement_id = $request->input('ama_announcements');
        $amas->save();
        return redirect('/create')->with('success', 'Ama record successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amas            = Ama::find($id);
        $ama_announcements = DB::table('ama_announcements')->select('title', 'user_id')->get();

        $tags            = DB::table('amas')->select(DB::raw('group_concat(tags) as tags'))->value('tags');
        $tag             = explode(",", $tags);
        $filtered_tags = array_unique($tag);
        
        //$tags = $amas->tags;
       // $tag             = explode(",", $tags);
       // $filtered_tags = array_unique($tag);

        return view('edit', ['amas' => $amas], ['ama_announcements' => $ama_announcements], ['tags' => $filtered_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'   => 'required',
            'content' => 'required',
        ]);

        $amas = Ama::find($id);

        $amas->title   = $request->input('title');
        $amas->content = $request->input('content');

        if ($request->tags) {
            $amas->tags = $request->input('tags');
        } else {
            $amas->tags = "";
        }

        $amas->person              = $request->input('person');
        $amas->user_id             = Auth::user()->id;
        $amas->ama_announcement_id = $request->input('ama_announcements');
        $amas->save();

        return redirect('/amas')->with('success', 'Ama record successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amas = Ama::find($id);
        $amas->delete();
        return redirect('/amas');
    }
}
