@extends('front.templatef')  
@section('b')
	
		
		<div class="hero-wrap hero-bread" style="background-image: url('front/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Product Single</h1>
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
    				<p><span>{{$post->category->name}}</span></p>
    				<p>{{$post->description}}</p>
          	    </div>
            </div>
        </div>

    </section>



@endsection