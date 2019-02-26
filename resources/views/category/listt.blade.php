@extends('template')  
@section('a')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
        <a href="{{ route('post.create')}}" class="btn btn-primary">ADD</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nom</th>
                        <th scope="col">description</th>
                        <th scope="col">image</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($posts as $post)
                    <tr>       
                       <th scope="row">{{$post->id}}</th>
                       <td>{{ $post->title }}</td>
                       <td>{{ $post->description }}</td>
                       <td><img src="{{ url('thumbs/' . $post->image) }}"></td>
                       <td>
                           <ul class="list-inline">
                               <li><a class="btn btn-block btn-success btn-xs" href="{{route('post.edit',$post->id)}}">modifier</a></li>
                               <li>
                                   <form method="POST" action="{{ route('post.destroy', $post->id)}}">
   					         {{ csrf_field() }}
   					         {{ method_field('DELETE') }}
                                <button class="btn btn-block btn-danger btn-xs">supprimer</button>
                           </form>
                               </li>
                           </ul>
                           
                           
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection('a')