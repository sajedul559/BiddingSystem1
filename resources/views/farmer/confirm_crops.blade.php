@extends('farmer.headerFooter')

@section('title')
confirm crops
@endsection

@section('body')

@if($pay_confirms->isEmpty())

<h4> Not found any confirm messages</h4>

@else
<h1 class="text-success">{{Session::get('msg')}}</h1>
    <div class="row flex-sm-row mt-5">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Payment For Confirm Info</h3>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr class="t1">
                    <th>Sl No</th>
                    <th>Crop name</th>
                    <th>Farmer Name</th>
                    <th>Payment type </th>
                    <th>Account id </th>
                    <th>confirm price </th>
                    <th>message</th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($pay_confirms as $confirms)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$confirms->crop_name}}</td>
                    <td>{{$confirms->f_username}}</td>
                    <td>{{$confirms->account_type}}</td>
                    <td>{{$confirms->account_id}}</td>
                    <td>{{$confirms->confirm_price}}</td>
                    @if($confirms->message=="null")
                    <td>empty</td>
                    @endif
                    
                     @php( $result =App\order::where('crop_id', $confirms->crop_id)->where('c_username', $confirms->cust_username)->first())
                     @if($result===null)
                    <td><a href="{{route('delete_confirm',['id'=>$confirms->id])}}" onclick="return confirm('Are you sure you want to delete this confirm for payment?');" class="btn btn-danger "><i class="fas fa-trash-alt"></i></a></td>
                     @else
                     <td>can not delete</td>
                     @endif
                </tr>
        @endforeach
            </table>
        </div>
    </div>
    @endif

        @endsection
