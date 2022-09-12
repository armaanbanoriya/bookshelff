@extends('admin.master')
@section('title', 'Category Homepage');

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <p class="alert alert-success">
                        {{ session('message') }}
                    </p>
                @endif
                <br>
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Edit Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <form class="row g-3" method="post" action="{{ url('category/update') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <input type="hidden" name="id" value="{{ $data->id }}">

                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="name" name="name" value="{{ $data->name }}" class="form-control"
                                    id="name">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" value="{{ $data->description }}"
                                    class="form-control" id="description">
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>


                            <div class=" card-footer form-group">
                                <button type="submit" class="btn btn-primary">UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
