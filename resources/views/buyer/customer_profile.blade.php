@extends('buyer.headerFooter')
@section('body')

@section('title')
customer profile
@endsection



@if($bids_crop->isEmpty())

<h4>Profile empty</h4>

@else

    <div class="row">
@foreach($bids_crop as $crop)
@php( $crop=App\crop_import::where('id',$crop->crop_id)->first())

    <div class="col-lg-4 col-md-6 my-3">
        <div class="card">
           <div class="card-body">
            <a href="#"><img class="card-img-top " width="400" height="200" src="{{asset($crop['crop_image'])}}" alt=""></a>
           <div class="item-desc text-center">
                            <h3 class="item-name">{{$crop->crop_name}}</h3>

                        <span>{{$crop->condition}}</span>
                        <p>Quantity:--{{$crop->crop_quantity}}</p>
                        <p>Bid Rate:--{{$crop->bid_rate}}TK</p>
                        <p>Date Finished:--{{$crop->last_date_bidding}}</p>
      
                    <a class="btn btn-success btn-block"  href="{{route('crop_details',['id'=>$crop['id']])}}" class="card-link">Details</a>
            </div>
           </div>
        </div>

    </div>
        @endforeach
    </div>

    @endif
@endsection