@extends('farmer.headerFooter')
@section('body')

   <style>
        /* menu-section starts here  */
        #menu-section {
            padding: 1%;
        }
        .card-body {
            text-align: center;
        }
        .item-desc {
            background: rgb(165, 164, 164);
        }
        .item-name {
            background: green;
            color: white;
            padding: 10px;
        }
        .item-desc>p {
            font-size: 0.8rem;
            padding: 5px;
            font-weight: bold;
        }
        .card{
            transition: .4s;
        }
        .card:hover{
            transform: scale(1.1);
        }
    </style>

        <div class="row mt-5">
            @foreach($crops as $crop)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url($crop->crop_image)}}" alt="food1" height="200" width="400">
                        <div class="item-desc">
                            <h3 class="item-name">{{$crop->crop_name}}</h3>

                                    <span>{{$crop->condition}}</span>
                                    <p>Quantity:--{{$crop->crop_quantity}}</p>
                                    <p>Bid Rate:--{{$crop->bid_rate}}TK</p>
                                    <p>Date Finished:--{{$crop->last_date_bidding}}</p>

                            <a class="btn btn-success btn-block stretched-link" target="_blank" href="{{route('crop_details',['id'=>$crop->id])}}" class="card-link">Details</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
@endsection