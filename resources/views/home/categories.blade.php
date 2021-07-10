@extends('home.headerFooter')

@section('title')
Crop Categories
@endsection

@section('body')


     <section>
       <div class="row my-5">
            @foreach($crops as $crop)
               @php( $farmer=App\farmer_register::where('username',$crop->username)->first())
               @if($farmer->action=="active")

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url($crop->crop_image)}}" alt="food1" height="200" width="350">

                        <div class="item-desc">
                            <h3 class="item-name">{{$crop->crop_name}}</h3>
                             <span>{{$crop->condition}}</span>
                            <p>Quantity:--{{$crop->crop_quantity}}</p>
                            <p>Bid Rate:--TK{{$crop->bid_rate}}</p>
                            <p>Date Finished:--{{$crop->last_date_bidding}}</p>
                            <a class="btn btn-success" target="" href="{{route('crop_details',['id'=>$crop->id])}}" class="card-link">Details</a>
                        @if(Session::get('c_username'))
                          <a class="btn btn-success" href="{{route('Bid_model',['id'=>$crop->id])}}">Bid here</a>

                          <a class="btn btn-success" href="{{route('wishlist_db',['id'=>$crop->id])}}" data-toggle="tooltip" data-placement="bottom" title="add wishlist"> <i class="far fa-heart"></i> </a>
                        @else
                            <a class="btn btn-success" target="_blank" href="{{route('login')}}">Bid here</a>
                        @endif
                        </div>

                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
     </section>


    @endsection