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
              <h3 class="box-title">update Post</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('post.update',$post->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Titre</label>
                  <input type="text" class="form-control"  value="{{ $post->title}}" id="title" placeholder="Enter Title" name="title">
                </div>
                <div class="form-group">
                  <label for="description">description</label>
                  <textarea id="description" class="form-control" name="description">{{ $post->description}}</textarea>
                </div>
                  <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" placeholder="{{$post->image}}" name="image">
                </div>
                   <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control">
                        @foreach ($categories as $category)
                           @if($category->id == $post->category_id)
                        <option value="{{ $category->id }}" selected>{{$category->name}}</option>
                            @else
                        <option value="{{ $category->id }}">{{$category->name}}</option>
                        
                            @endif
                        @endforeach
                    </select>
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