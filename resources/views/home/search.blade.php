@extends('home.headerFooter')


@section('title')
Search details
@endsection

@section('body')
    @if($s->isEmpty())
       <h4> There was no search results</h4>
    @endif

        <section class="my-5">
        <div class="row">
            @foreach($s as $crop)
              @php( $farmer=App\farmer_register::where('username',$crop->username)->first())
               @if($farmer->action=="active")

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url($crop->crop_image)}}" alt="food1" height="200" width="400">

                        <div class="item-desc">
                            <h3 class="item-name">{{$crop->crop_name}}</h3>
                             <span>{{$crop->condition}}</span>
                            <p>{{$crop->crop_location}}</p>
                            <p>Quantity:--{{$crop->crop_quantity}}</p>
                            <p>Bid Rate:--{{$crop->bid_rate}}TK</p>

                            <a class="btn btn-success" target="" href="{{route('crop_details',['id'=>$crop->id])}}" class="card-link">Details</a>

                        @if(Session::get('c_username'))
                           <a class="btn btn-success" href="{{route('Bid_model',['id'=>$crop->id])}}">Bid here</a>

                           <a class="btn btn-success" href="{{route('wishlist_db',['id'=>$crop->id])}}" data-toggle="tooltip" data-placement="bottom" title="add wishlist"> <i class="far fa-heart"></i> </a>
                        @else
                                <a class="btn btn-success" href="{{route('login')}}">Bid here</a>
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