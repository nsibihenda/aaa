<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutoriel;
use App\Tag;

class tutorielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutoriels = Tutoriel::All();

        return view('tutoriel.list', compact('tutoriels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::All();
        return view('tutoriel.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title'=>'required',
           'description' => 'required',
         
           
       ]);
        $pos = new Tutoriel();
        $pos->title = $request->title;
        $pos->description = $request->description;
        $pos->save();
        $pos->tags()->sync($request->tag, false);
        return view('tutoriel.list');
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
        $tutoriel = Tutoriel::find($id);
        return view('tutoriel.update', compact('tutoriel'));
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
        $this->validate($request,[
           'title'=>'required',
           'description' => 'required',
         
           
       ]);
        $pos = Tutoriel::find($id);
        $pos->title = $request->title;
        $pos->description = $request->description;
        $pos->save();
        return view('tutoriel.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pos = Tutoriel::find($id);
        $pos->delete();
        return view('tutoriel.list');
    }
}
