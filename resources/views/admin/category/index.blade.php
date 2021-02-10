@extends('layouts.admin_layout')

@section('title','All Categories')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Categories</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

        <section class="content">

          <!-- Default box -->
          <div class="card">

            <div class="card-body p-0">
              <table class="table table-striped projects">
                <thead>
                <tr>
                  <th style="width: 1%">
                    ID
                  </th>
                  <th style="width: 20%">
                    Title
                  </th>
                  <th style="width: 50%">
                    Description
                  </th>
                  <th>
                    Action
                  </th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>
                    {{ $loop->iteration }}
                  </td>
                  <td>
                    {{ $category->title }}
                  </td>
                  <td>
                    {{ $category->description }}
                  </td>
                  <td class="project-actions">
                    <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{ route('category.edit',$category->id) }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </section>


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection

