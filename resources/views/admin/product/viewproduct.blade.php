@extends('../admin.master')
@section('title', 'View Products')

@section('content')
    <div class="card">
        @if (session('message'))
            <p class="alert alert-success">
                {{ session('message') }}
            </p>
        @endif
        <div class="p-3">
            <div class="text-right mb-3">
                <h3 class="card-title"> View <span>Categories</span> </h3>
                <div class="text-right">
                    <a href="{{ url('product/addproduct') }}" class="btn btn-dark">Add Products</a>
                </div>
            </div>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Category</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Product Size</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Quantity </th>
                        <th scope="col">Action</th>
                    </tr>

                </thead>
                <tbody>

                @foreach ($data as $b)
                        <tr>
                            <th scope="row">{{ $b->id }}</th>
                            <td>{{ $b->categories->name }}</td>
                            <td>{{ $b->product_name }}</td>
                            <td>{{ $b->product_code }}</td>
                            <td>{{ $b->product_size }}</td>
                            <td ><p class="text-truncate">{{ $b->product_description }}</p> </td>
                            <td><img src="{{ url('/upload/' . $b->product_image) }}"
                                    style="height: 150px; width: 150px; border-radius: 100%;"></td>
                            <td>{{ $b->product_price }}</td>
                            <td>{{ $b->product_quantity }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ 'show/' . $b->id }}">Show</a>
                                <a class="btn btn-success" href="{{ 'edit/' . $b->id }}">Edit</a>
                                <a class="btn btn-danger" href="{{ 'delete/' . $b->id }}">Delete</a>
                            </td>
                        </tr>
                @endforeach

                    </tbody>

                <tfoot>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Category</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Product Size</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Quantity </th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>


            </table>
        </div>
    </div>

@endsection
