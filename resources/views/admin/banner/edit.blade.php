@extends('../admin.master')
@section('title', 'Create Banner')

@section('content')
    <div class="container-fluid">
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
                        <h3 class="card-title">Edit Banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ url('banner/update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" value="{{ $data->id }}" name="id">

                            <div class="form-group">
                                <label for="name" class="form-label">Title</label>
                                <input type="text" name="title" value="{{ $data->title }}" class="form-control"
                                    placeholder="Enter Title" id="title">
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="headingtitle" class="form-label">Title(Heading)</label>
                                <input type="text" name="headingtitle" value="{{ $data->headingtitle }}"
                                    placeholder="Enter Title Heading" class="form-control" id="headingtitle">
                                @error('headingtitle')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="boldheadingtitle" class="form-label">Title(Bold Heading)</label>
                                <input type="text" name="boldheadingtitle" value="{{ $data->boldheadingtitle }}"
                                    placeholder="Enter your Bold Heading Title" class="form-control" id="boldheadingtitle">
                                @error('boldheadingtitle')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="url">URL: </label>
                                <input type="text" name="url" value="{{ $data->url }}" class="form-control"
                                    id="url" placeholder="Paste link here">
                                @error('url')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image" class="form-label">Upload Image</label>
                                <img src="{{ url('/upload/'.$data->image) }}" class="img-thumbnail" alt="">
                                <input type="file" name="image" value="{{ $data->image }}" class="form-control"
                                    id="image">
                                @error('image')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>


                            <!-- /.card-body -->
                            <button type="submit" class="btn btn-primary">update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
    </div>

@endsection
