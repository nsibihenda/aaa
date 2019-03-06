@extends('front.templatef')  
@section('b')
		
		<div class="hero-wrap hero-bread" style="background-image: url('/front/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">TUTORIELS</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <tbody>
                                @foreach($tutoriels as $tutoriel)
						      <tr class="text-center">
                                  
						        <td class="product-name">
						        	<a href="{{url('/blog1/single1/' .$tutoriel->id)}}"><h3>{{$tutoriel->title}}</h3></a>
						        	<p>{{$tutoriel->description}}</p>
						        </td>
                                </tr>
                                  @endforeach
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
  
			</div>
		</section>

		
@endsection
    
  
