@extends('template')  
@section('a')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
        <a href="{{ route('role.create')}}" class="btn btn-primary">ADD</a>
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
                        <th>permissions</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($roles as $role)
                    <tr>       
                       <th scope="row">{{$role->id}}</th>
                       <td>{{ $role->name }}</td>
                        <td>
                             @foreach ($role->permissions()->pluck('name') as $permission)
                               <span >{{ $permission }}</span><br>
                             @endforeach
                        
                        </td>
                       <td>
                           <ul class="list-inline">
                               <li><a class="btn btn-block btn-success btn-xs" href="{{route('role.edit',$role->id)}}">modifier</a></li>
                               <li>  
                                   <form method="POST" action="{{ route('role.destroy', $role->id)}}">
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