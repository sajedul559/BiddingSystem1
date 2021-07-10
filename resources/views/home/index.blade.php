 @extends('home.headerFooter')


@section('title')
Home
@endsection

@section('body')


      <h1 class="text-success">{{Session::get('msg')}}</h1>
      <h1 class="text-success">{{Session::get('l_msg')}}</h1>

    <div id="carouselExampleIndicators" class="carousel slide my-2" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img  style="height: 300px;" class="d-block img-fluid slider_style " src="{{asset('final_eagri/img/1.jpg')}}" alt="First slide" height="">
            </div>
            <div class="carousel-item">
                <img  style="height: 300px;" class="d-block img-fluid slider_style" src="{{asset('final_eagri/img/2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img  style="height: 300px;" class="d-block img-fluid " src="{{asset('final_eagri/img/3.jpg')}}" alt="Third slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


           
<!--  /* menu-section starts here  */-->
   
{{-- 
      <section class="py-1 text-center text-dark">        
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-2">
                        <div class="card bg-light">
                            <div class="card-body">
                                <i class="fas fa-3x fa-user-circle mb-3"></i>
                                <h3>Register your account</h3>
                                <p class="lead text-justify">To create an account, farmers and buyers need to register their contact details.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-2">
                        <div class="card bg-light">
                            <div class="card-body">
                               <i class="fas fa-3x fa-lock-open mb-3"></i>
                                <h3>Log in to your account</h3>
                                <p class="lead text-justify">Farmers and buyers need to login to their account to sell and buy the product. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-2">
                        <div class="card bg-light">
                            <div class="card-body">
                                <i class="fas fa-3x fa-list-ul mb-3"></i>
                                <h3>Sell ​​products</h3>
                                <p class="lead text-justify">Now farmers can sell their agricultural products online anywhere, anytime.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 mb-2">
                        <div class="card bg-light">
                            <div class="card-body">
                               <i class="fas fa-3x fa-shopping-cart mb-3"></i>
                                <h3>Buy ​​products</h3>
                                <p class="lead text-justify">Now buyers can buy agricultural products online anywhere, anytime by bidding</p>
                            </div>
                        </div>
                    </div>
                </div>       
                 
            </section> --}}




   <section class="my-4">
    <div class="row">
        @foreach($crops as $crop)

        @php( $farmer=App\farmer_register::where('username',$crop->username)->first())
        @if($farmer->action=="active")

        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" src="{{url($crop->crop_image)}}" alt="food111" height="200" width="400">
                    <div class="item-desc">
                        <h3 class="item-name">{{$crop->crop_name}}</h3>

                        <span>{{$crop->condition}}</span>
                        <p>Quantity:--{{$crop->crop_quantity}}</p>
                        <p>Bid Rate:--{{$crop->bid_rate}}TK</p>
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




<section class="float-right">
    {{$crops}}
</section>


    

    @endsection