@extends('front.templatef')  
@section('b')





		
		<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="{{url('/blog/contact')}}" class="bg-white p-5 contact-form" method="POST">
                {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nom et Prénom">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Sujet">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          
        </div>
       
      </div>
    </section>


 




@endsection