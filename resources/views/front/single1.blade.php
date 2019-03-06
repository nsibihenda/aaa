@extends('front.templatef')  
@section('b')
	
		
		<div class="hero-wrap hero-bread" style="background-image: url('front/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">tutoriel Single</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="#">article</a></span></p>
          </div>
        </div>
      </div>
    </div>
		
	<section class="ftco-section bg-light">
    	<div class="container">
    				<h3>{{$tutoriel->title}}</h3>
    				<p>{{$tutoriel->description}}</p>
        </div>
    </section>
       <div class="container">
           <div class="row">
               @foreach ($tutoriel->tags()->get() as $tag)
                   <div style=" background-color: #f1b8c4; padding: 5px; text-align: center ;border-radius: 10px; color: white; margin-bottom: 3px; margin-left: 5px" class="col-md-2">
                       {{ $tag->name }}
                   </div>
               @endforeach
           </div>
       </div>


        <form action="{{ url('/blog1/single1',$tutoriel->id)}}" class="bg-white p-5 contact-form" method="POST">
                {{ csrf_field() }}
            
              <div class="form-group">
                <textarea name="body" id="" cols="20" rows="4" class="form-control" placeholder="commentaire"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Commenter" class="btn btn-primary py-3 px-5">
              </div>
            </form>
            <div class="w-100"></div>
          <div >
              @foreach($tutoriel->comments()->latest()->get() as $com)
          	<div class="info bg-white p-4" style="margin-bottom:30px">
	            <p>{{ $com->body}}
                    <br>
                </p>
                <span>{{ $com->created_at}}</span>

	          </div>
              @endforeach
          </div>



@endsection