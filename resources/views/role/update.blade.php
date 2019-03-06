@extends('template')  
@section('a')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="container">
          
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">modifier role</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('role.update',$role->id)}}" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nom</label>
                  <input type="text" class="form-control" id="name" value="{{$role->name}}" name="name">
                </div>
                  <div class="form-group">
                    <label for="permissions">Permissions</label>
                    <select class="form-control" name="permissions[]" multiple=“multiple”>
                       @foreach ($permissions as $perm)
                   <option value="{{$perm->id}}">{{$perm->name}}</option>
                    @endforeach
                    </select>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">UPDATE</button>
              </div>
            </form>
          </div>
            
        </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection