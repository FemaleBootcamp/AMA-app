<?php

namespace App\Http\Controllers;

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
       
   
         $amas = DB::table('amas')->select('title', 'person', 'tags', 'created_at')->paginate(20);

        
        echo $request->date_from;
        echo $request->date_to;
        echo $request->tags;
        
            if ($request->has('date_from')) {


               $amas = DB::table('amas')->select('title', 'person', 'tags', 'created_at')->whereBetween('created_at', [$request->date_from, $request->date_to])->paginate(20);


                }     

         
             if(request()->has('tags')){
                $amas = DB::table('amas')->select('title', 'person', 'tags', 'created_at')->where('tags' , $request->tags )->paginate(20);
                }

        

        
          return view('ama_list',['amas' => $amas]);

                
            
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
