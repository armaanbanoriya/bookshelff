@extends('../admin.master')
@section('title', 'Show Subimages')

@section('content')
    <div class="card">
        <div class="card-header align-items-center ">
            <h3 class="card-title"> View <span>Sub Images</span> </h3>
            <div class="text-right">
                <a href="{{ url('subimages/create') }}" class="btn btn-dark">Add Sub Image</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">IMAGES</th>
                        <th scope="col">Action</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($data as $b)
                        <tr>
                            <th scope="row">{{ $b->id }}</th>
                            <td><img src="{{ url('/upload/' . $b->image) }}"
                                    style="height: 150px; width: 150px; border-radius: 100%;"></td>

                            <td>
                                <a class="btn btn-primary" href="{{ 'view/' . $b->id }}">Show</a>
                                <a class="btn btn-success" href="{{ 'edit/' . $b->id }}">Edit</a>
                                <a class="btn btn-danger" href="{{ 'delete/' . $b->id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">IMAGES</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>


            </table>
        </div>
    </div>


    @if (session('message'))
        <p class="alert alert-success">
            {{ session('message') }}
        </p>
    @endif

    <table class="table table-responsive">
        <thead>

        </thead>


    </table>
@endsection
