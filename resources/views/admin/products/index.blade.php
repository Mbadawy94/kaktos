@extends('admin.layouts.master')
@section('content')
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

          <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Products</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ 'admin' }}">Home</a></li>
                      <li class="breadcrumb-item active">Products Table</li>
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
                    <h3 class="card-title">Products</h3>
                      <div class="card-tools">
                        <ul class="pagination pagination-sm float-right">
                            {{ $products->links('vendor.pagination.default') }}
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
                          <th>Category</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Description</th>
                          <th>Important</th>
                          <th>New</th>
                          <th>Sale</th>
                          <th>Show\Edit\Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($products as $product)
                        <tr>
                          <td>{{ $product->id }}</td>
                          <td>{{ $product->title }}</td>
                          <td>{{ $product->category->name }}</td>
                          <td>{{ $product->price }}</td>
                          <td>{{ $product->quantity }}</td>
                          <td>{{ Str::limit($product->description, $limit = 50, $end = '...') }}</td>
                          <td>{{ $product->important }}</td>
                          <td>{{ $product->new }}</td>
                          <td>{{ $product->sale }}</td>
                          <td><a href="products/{{ $product->slug }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                              <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="{{ route('admin.products.destroy', $product->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$product->id}}"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                          <div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                      <div class="modal-body">
                                        @csrf
                                        @method('DELETE')
                                        <h5 class="text-center">Are you sure you want to delete this Product?</h5>
                                        <h5 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i>
                                            Also you will delete all products related to this product</h5>
                                      </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Yes, Delete Product</button>
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
