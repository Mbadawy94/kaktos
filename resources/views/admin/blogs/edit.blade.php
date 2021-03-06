@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper" style="min-height: 1342.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
{{--                                <input value="{{$product->id}}" name="product_id" hidden>--}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="popular">
                                            Popular
                                        </label>
                                          <input type="hidden" name="popular" value="0">
                                          <input type="checkbox" name="popular" value="1">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">
                                            Title
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               id="title"
                                               name="title"
                                               placeholder="Enter Title"
                                               value="{{ $blog->title }}"
                                               required
                                               >
                                    </div>

                                    <div class="form-group">
                                        <label for="excerpt">
                                            Excerpt
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               id="excerpt"
                                               name="excerpt"
                                               placeholder="Enter Excerpt"
                                               value="{{ $blog->excerpt }}"
                                               required
                                               >
                                    </div>

                                    <div class="form-group">
                                        <label for="body">
                                            Body
                                        </label>
                                        <textarea
                                               class="form-control"
                                               id="body"
                                               name="body"
                                               placeholder="Enter Body"
                                               required
                                               rows="10"
                                        >{{ $blog->body }}</textarea>
                                      </div>
                                    <div class="form-group">
                                    <label for="inputStatus">Category</label>
                                        <select id="inputStatus" name="category_id" class="f    orm-control custom-select">
                                           @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected': '' }}> {{ $category->name }} </option>
                                           @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">
                                            Blog's Photo
                                        </label>
                                        <div class="input-group">
                                            <img src="{{ $blog->image_url }}" height="200">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">
                                            Change Image
                                        </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file"
                                                       class="custom-file-input"
                                                       id="image"
                                                       name="image"
                                                       >
                                                <label class="custom-file-label"
                                                       for="blogImage">
                                                    Choose Another Image
                                                </label>
                                            </div>

                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    change
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
