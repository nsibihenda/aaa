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
              <h3 class="box-title">add permission</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('permission.store')}}" >
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nom</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter le nom" name="name">
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">ADD</button>
              </div>
            </form>
          </div>
            
        </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection