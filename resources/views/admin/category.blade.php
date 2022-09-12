@extends('admin.master')
@section('title', 'Category Homepage')

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
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>
                </div>
                <form method="post" action="{{ url('category/save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description">
                            @error('description') <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
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


                        <div class="form-group">
                            <button type="submit" name="" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
