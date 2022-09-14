@extends('../admin.master')
@section('title', 'Add Product')


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
                    <h3 class="card-title">Add Products</h3>
                </div>
                <form method="POST" action="{{ url('product/save') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_id">Category Name</label>
                            <select class="form-control" name="category_id" value="{{ old('category_id') }}">
                                <option value="">Select Category</option>
                                @foreach ($data as $a)
                                    <option value="{{ $a->id }}">{{ $a->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Name" value="{{ old('product_name') }}">
                            @error('product_name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Code</label>
                            <input type="text" name="product_code" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Product Code" value="{{ old('product_code') }}">
                            @error('product_code')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Size</label>
                            <input type="text" name="product_size" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Product Size" value="{{ old('product_size') }}">
                            @error('product_size')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Description</label>
                            <input type="text" name="product_description" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Description" value="{{ old('product_description') }}">
                            @error('product_description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="exampleInputFile">Product Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="product_image" class="custom-file-input" value="{{ old('product_image') }}">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            @error('product_image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Price" value="{{ old('product_price') }}">
                            @error('product_price')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Quantity</label>
                            <input type="text" name="product_quantity" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Quantity" value="{{ old('product_quantity') }}">
                            @error('product_quantity')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- /.card -->
@endsection
