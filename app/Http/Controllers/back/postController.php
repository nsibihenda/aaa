<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use App\Http\Requests\postRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::All();
        
        $tags = Tag::All();
        $cat = Category::All();
        
        return view('post.list',compact('posts','cat'), compact('tags'));
    }
    public function create()
    {
        $categories = Category::All();
        $tags = Tag::All();
        return view('post.create',compact('categories'),compact('tags'));
    }

    public function store(Request $request)
    {
      
    $this->validate($request,[
           'title'=>'required',
           'description' => 'required',
         
           
       ]);
        // Save image
       $path = Storage::disk('images')->put('', $request->file('image'));
       // Save thumb
       $image = InterventionImage::make($request->file('image'))->widen(100);
       Storage::disk('thumbs')->put($path, $image->encode());

       $pos = new Post();
       $pos->title = $request->title;
       $pos->description = $request->description;
       $pos->image = $path;
       $pos->category_id = $request->category;
       $pos->save();
        
$pos->tags()->sync($request->tag, false);
        $posts = Post::All();
        return view('post.list', compact('posts'));
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
        $post = Post::find($id);
        $categories = Category::All();

        return view('post.update',compact('post'),compact('categories'));
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
             'image'=>'required',
            ]);
     // Save image
       $path = Storage::disk('images')->put('', $request->file('image'));
       // Save thumb
       $image = InterventionImage::make($request->file('image'))->widen(100);
       Storage::disk('thumbs')->put($path, $image->encode());
        
        $post = post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image =$path;
        $post->save();
       return view('post.list'); 
    }
    

    public function destroy($id)
    {
         $post = Post::find($id);
         $post->delete();
        return view('post.list');
    }
}
