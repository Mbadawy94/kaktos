@extends('admin.layouts.master')
@section('content')
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

          <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Tags</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ 'admin.dashboard' }}">Home</a></li>
                      <li class="breadcrumb-item active">Tags</li>
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
                    <h3 class="card-title">Tags Table</h3>
                    <a href="{{ route('admin.tags.create')}}" class="btn btn-success float-right ml-3"><i class="fas fa-plus-square"></i> Create</a>
                    <div class="card-tools ">
                        <ul class="pagination pagination-sm float-right ">
                            {{ $tags->links('vendor.pagination.default') }}
                        </ul>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Edit\Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($tags as $tag)
                        <tr>
                          <td>{{ $tag->id }}</td>
                          <td>{{ $tag->name }}</td>
                          <td><a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="{{ route('admin.tags.destroy', $tag->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
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
