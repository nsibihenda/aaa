@extends('front.templatef')  
@section('b')
	
		
		<div class="hero-wrap hero-bread" style="background-image: url('front/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">post Single</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="#">article</a></span></p>
          </div>
        </div>
      </div>
    </div>
		
	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/menu-2.jpg" class="image-popup">
                        <img src="front/images/product-1.jpg" class="img-fluid" alt="Colorlib Template">
                    </a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$post->title}}</h3>
    				<p><span>CATEGORIE: {{$post->category->name}}</span></p><br>
    				<p>{{$post->description}}</p>

          	    </div>
                <div class="container">
                    <div class="row">
                        @foreach ($post->tags()->get() as $tag)
                            <div style=" background-color: #f1b8c4; padding: 5px; text-align: center ;border-radius: 10px; color: white; margin-bottom: 3px" class="col-md-2">
                                {{ $tag->name }}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

           <form action="{{ url('/blog/single',$post->id)}}" class="bg-white p-5 contact-form" method="POST">
                {{ csrf_field() }}
            
              <div class="form-group">
                <textarea name="body" id="" cols="20" rows="4" class="form-control" placeholder="commentaire"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Commenter" class="btn btn-primary py-3 px-5">
              </div>
            </form>
        
          <div class="w-100"></div>
        {{ $post->comments()->count() }}
          <div >
              @foreach($post->comments()->latest()->get() as $com)
          	<div class="info bg-white p-4" style="margin-bottom:30px">
	            <p>{{ $com->body}}
                    <br>  
                </p>
                <span>{{ $com->created_at}}</span>
                
	          </div>
              @endforeach
          </div>
        
          

    </section>



@endsection