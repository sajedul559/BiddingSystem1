@extends('farmer.headerFooter')
@section('body')

    <div class="row flex-sm-row my-5">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">orders Info</h3>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr>
                    <th>Sl No</th>
                    <th>Farmer_Username</th>
                    <th>Customer_Username</th>
                    <!-- <th>Customer name</th> -->
                    <th>Crop id</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>amount</th>
                    <th>transaction_id</th>
                    <th>Action</th>
                </tr>

               @php($i=1)
               @foreach($orders as $order)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$order->f_username}}</td>
                    <td>{{$order->c_username}}</td>
                    <!-- <td>{{$order->name}}</td> -->
                    <td>{{$order->crop_id}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->amount}}</td>
                    <td>{{$order->transaction_id}}</td>
                    <td>
                        <a target="_blank" href="{{route('order_download_invoice',['id'=>$order->id])}}" class="btn btn-success"><i class="fas fa-cloud-download-alt"></i></a> 
                    </td>
                </tr>
                @endforeach
                   
            </table>
        </div>
    </div>


@endsection