@extends('admin.layouts.master')
@section('content')
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

          <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Blogs</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ 'admin' }}">Home</a></li>
                      <li class="breadcrumb-item active">Blogs</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Blogs Table</h3>
                    <div class="card-tools">
                        <ul class="pagination pagination-sm float-right">
                            {{ $blogs->links('vendor.pagination.default') }}
                        </ul>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Excerpt</th>
                          <th>Category</th>
                          <th>Body</th>
                          <th>Tags</th>
                          <th>Popular</th>
                          <th>Show/Edit/Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($blogs as $blog)
                        <tr>
                          <td>{{ $blog->id }}</td>
                          <td>{{ Str::limit($blog->title, $limit = 25, $end = '...') }}</td>
                          <td>{{ Str::limit($blog->excerpt, $limit = 25, $end = '...') }}</td>
                          <td>{{ $blog->category->name }}</td>
                          <td>{{ Str::limit($blog->body, $limit = 50, $end = '...') }}</td>
                          <td>@foreach($blog->tags as $tag) {{ $tag->name }}@endforeach</td>
                          <td>{{ $blog->popular }}</td>
                          <td><a href="blogs/{{ $blog->slug }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                              <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="{{ route('admin.blogs.destroy', $blog->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$blog->id}}"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
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
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>

          </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


    </div>
@endsection
