@extends('front.templatef')
@section('b')

    <div class="hero-wrap hero-bread" style="background-image: url('/front/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">POSTS</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                @foreach ($t->posts()->get() as $post)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('front/images/image_1.jpg')">
                            </a>
                            <div class="text mt-3 d-block pl-md-5">
                                <h3 class="heading mt-3"><a href="{{url('/blog/single/' .$post->id)}}">{{$post->title}}</a></h3>
                                <div class="meta mb-3">
                                    <div>{{$post->created_at}}</div><br>
                                    <div>categorie: <a href="#">{{$post->category->name}}</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <tbody>
                            @foreach ($t->tutoriels()->get() as $tutoriel)
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


