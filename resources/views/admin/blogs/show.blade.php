@extends('admin.layouts.master')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
              <li class="breadcrumb-item active">{{ Str::limit($blog->title, $limit = 15, $end = '...')}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3>{{ $blog->title }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <!-- /.mailbox-read-info -->
              <div class="mailbox-read-message">
                <p>{{ $blog->body }}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
              <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                <li>
                  <img src="{{ $blog->image_url }}" class="product-image" alt="Blog Image">
                </li>
              </ul>
            </div>
            <!-- /.card-footer -->
            <div class="card-footer">
              <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
              <a href="{{ route('admin.blogs.destroy', $blog->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$blog->id}}"><i class="fas fa-trash"></i></a>
            </div>
            <div class="modal fade" id="deleteModal{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="post">
                      <div class="modal-body">
                        @csrf
                        @method('DELETE')
                        <h5 class="text-center">Are you sure you want to delete this Blog?</h5>
                        <h5 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i>
                            Also you will delete all blogs related to this blog</h5>
                      </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Yes, Delete Blog</button>
                        </div>
                    </form>
                  </div>
              </div>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
