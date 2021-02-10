@extends('layouts.admin_layout')

@section('title','Edit category')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit category</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <hr/>
      @if (session('success'))
        <div class="offset-3 col-md-6 alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
      @endif
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-3 col-md-6 card card-primary">
          <!-- form start -->
          <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" value="{{ $category->title }}" name="title" class="form-control"
                       id="exampleInputEmail1" placeholder="Enter title Category">
              </div>
              <div class="form-group">
                <label for="exampleDescription">Textarea</label>
                <textarea name="description"  class="form-control" rows="3"
                          placeholder="{{ $category->description }}" id="exampleDescription"></textarea>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection

