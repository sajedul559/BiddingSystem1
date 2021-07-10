@extends('buyer.headerFooter')

@section('title')
customer messages
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
                    <td><a href="{{route('farm_profile',['f_username'=>$confirms->f_username])}}">{{$confirms->f_username}}</a></td>
                    <td>{{$confirms->account_type}}</td>
                    <td>{{$confirms->account_id}}</td>
                    <td>{{$confirms->confirm_price}}</td>

                    @if($confirms->message=="null")
                    <td>empty</td>
                    @endif
                    <td>
                        <a target="_blank" href="{{route('crop_details',['id'=>$confirms->crop_id])}}" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
                        
                         <a target="_blank" href="{{route('pay_confirm_download_invoice',['id'=>$confirms->id])}}" class="btn btn-success"><i class="fas fa-cloud-download-alt"></i></a>

                        <a target="_blank" href="{{route('example2',['id'=>$confirms->id,'crop_id'=>$confirms->crop_id,])}}" class="btn btn-success"><i class="fab fa-amazon-pay"></i></a>

                        <!-- <button class="btn btn-success " data-toggle="modal" data-target="#payModal"><i class="fab fa-amazon-pay"></i></button> -->

                        <a target="_blank" href="{{route('payment_form',['id'=>$confirms->id])}}" class="btn btn-success"><i class="fab fa-amazon-pay"></i></a>
                    </td>
                </tr>
        @endforeach
            </table>
        </div>
    </div>
    @endif

        @endsection
