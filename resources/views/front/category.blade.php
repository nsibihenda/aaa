@extends('front.templatef')  
@section('b')
		
		<div class="hero-wrap hero-bread" style="background-image: url('/front/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
            
            @foreach ($posts as $post)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('front/images/image_1.jpg');">
              </a>
              <div class="text mt-3 d-block pl-md-5">
                <h3 class="heading mt-3"><a href="{{url('/blog/single/' .$post->id)}}">{{$post->title}}</a></h3>
                <div class="meta mb-3">
                  <div>{{$post->created_at}}</div><br>
                  
                </div>
              </div>
            </div>
          </div>
            @endforeach
        </div>
      </div>
    </section>
		
@endsection
    
  
