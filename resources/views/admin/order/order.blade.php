@extends('admin.master')
@section('title','Placed Orders')

@section('content')



  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Users Orders</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered ">
        <thead>
        <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>Order Status</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Pincode</th>
          <th>Phone</th>
          <th>Payment Method</th>
          <th>Grand Total</th>
          <th>Order Details</th>
          <th>Receipt</th>

        </tr>
        </thead>

        <tbody>
          @foreach ($data as $orproduct)
        <tr @if ($loop->odd)  class="table-info" @else class="table-danger"
        @endif >
          <td>{{$orproduct->id}}</td>

          <td>{{$orproduct->name}}</td>
          <td>{{$orproduct->useremail}}</td>
          <td>{{$orproduct->order_status}} <a href="" type="button" class="btn btn-warning edit"  data-toggle="modal" data-target="#exampleModal" ><i class="far fa-edit"></i></a> </td>
          <td>{{$orproduct->address}}</td>
          <td>{{$orproduct->city}}</td>
          <td>{{$orproduct->state}}</td>
          <td>{{$orproduct->pincode}}</td>
          <td>{{$orproduct->phone}}</td>
          <td>{{$orproduct->payment_method}}</td>
          <td>Rs.{{$orproduct->grand_total}}/-</td>
          <td>
            <a class="btn btn-primary" href="{{'accountdetails/'.$orproduct->id}}">View</a>

          </td>
          <td>
            <a class="btn btn-success" href="{{'invoice/'.$orproduct->id}}">View</a>
          </td>

        </tr>

        @endforeach
        </tbody>

        <tfoot>
        <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>Order Status</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Pincode</th>
          <th>Phone</th>
          <th>Payment Method</th>
          <th>Grand Total</th>
          <th>Order Details</th>
          <th>Receipt</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <script>
      //
  </script>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{url('updatestatus')}}">
                @csrf
            <label for="">Update status</label>
            <select name="order_status" id="">
                <option value="Not yet Dispatched">Not yet Dispatched</option>
                <option value="Arriving">On its way</option>
                <option value="Out for delivery">Out for delivery</option>
            </select>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>




@endsection
