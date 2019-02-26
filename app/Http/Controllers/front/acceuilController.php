<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Post;
use App\Category;
use App\Mail\Contact;

class acceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
    
    public function index()
    {
        $posts = Post::All();
        $categories = Category::All();
        return view('front.acceuil',compact('posts'),compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::All();
        return view('front.contact', compact('categories'));
    }

    public function store(Request $request)
    {
//        $this->validate($request,[
//           'name'=>'required',
//           'email'=>'required',
//            'subject'=>'required',
//           'message'=> 'required',
//           
//       ]);
//       $pos = new Contact();
//       $pos->name = $request->name;
//       $pos->email = $request->email;
//       $pos->subject = $request->subject;
//       $pos->message = $request->message;
//       $pos->save();
        
        Mail::to(['nsibihendaa@gmail.com','nsibi_henda@yahoo.com'])
            ->send(new Contact($request->except('_token')));

        return back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $categories = Category::All();
        return view('front.single',compact('post'),compact('categories'));
    }
    public function showw($id)
    {
        $cat = Category::find($id);
        $posts = $cat->posts()->get();
        $categories = Category::All();
        return view('front.category',compact('posts'),compact('categories'));
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
