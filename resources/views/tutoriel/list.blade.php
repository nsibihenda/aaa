@extends('template')  
@section('a')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
        <a href="{{ route('tutoriel.create')}}" class="btn btn-primary">ADD</a>
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
                        <th> Tags</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($tutoriels as $tutoriel)
                    <tr>       
                       <th scope="row">{{$tutoriel->id}}</th>
                       <td>{{ $tutoriel->title }}</td>
                       <td>{{ $tutoriel->description }}</td>
                        <td>
                            @foreach ($tutoriel->tags()->get() as $tag)
                                {{ $tag->name }}
                            @endforeach
                        </td>
                       <td>
                           <ul class="list-inline">
                               <li><a class="btn btn-block btn-success btn-xs" href="{{route('tutoriel.edit',$tutoriel->id)}}">modifier</a></li>
                               <li>
                                   <form method="POST" action="{{ route('tutoriel.destroy', $tutoriel->id)}}">
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