@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper" style="min-height: 1342.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Create Product</li>
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
                                <h3 class="card-title">Create Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                                @csrf
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
                                               value="{{ old('title') }}"
                                               required
                                               >
                                    </div>
                                    <div class="form-group">
                                        <label for="excerpt">
                                            Excerpt
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               name="excerpt"
                                               placeholder="Enter Excerpt"
                                               value="{{ old('excerpt') }}"
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
                                        >{{ old('body') }}</textarea>
                                      </div>
                                    <div class="form-group">
                                    <label for="inputStatus">Categories</label>
                                        <select id="inputStatus" name="category_id" class="form-control custom-select">
                                          <option selected disabled>Select one</option>
                                           @foreach($categories as $category)
                                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                           @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">
                                            Photo
                                        </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file"
                                                       class="custom-file-input"
                                                       id="image"
                                                       name="image"
                                                       required
                                                       >
                                                <label class="custom-file-label"
                                                       for="productImage">
                                                    Choose Image
                                                </label>
                                            </div>

                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Upload
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
