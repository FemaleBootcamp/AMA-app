<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        $amas = DB::table('amas')->select('title', 'person', 'tags', 'created_at');

           
          if($request->date_from) {
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
