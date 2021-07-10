@extends('buyer.headerFooter')

@section('title')
Bid form
@endsection

@section('body')


              <style>
		
			  </style>

                   

                <div class="jumbotron mx-auto col-lg-6 mt-5">
				     <h3 class="text-success text-center">Bid here</h3>
                    <form action="{{route('bid_msg_save')}}" method="post">
                        @csrf
                        <input type="hidden" name="crop_id" value="{{$crop->id}}" class="form-control">
                        <input type="hidden" name="crop_name" value="{{$crop->crop_name}}" class="form-control">
                        <input type="hidden" name="f_username" value="{{$crop->username}}" class="form-control">
                        <input type="hidden" name="cust_username" value="{{Session::get('c_username')}}" class="form-control">


                           
                        <div class="bid">
                            Bid Rate::<span class="ml-4 ">{{$crop->bid_rate}}</span>
                        </div>
				
                         @if($owners==null)
                               <div class="bid">
                                   Best Bidder::<span>Not any bid</span>
                               </div>
                         @else 
                        <div class="bid">
                            Best Bidder::<span class="ml-4">{{$owners}}</span>
                        </div>
                         @endif


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="" class="form-control" placeholder="Enter your name" required>
                        </div>


                        <div class="form-group">
                            <label>Bid price</label>
                                <input type="number" name="bid_price" value="" class="form-control" placeholder="Enter Bid price" min="{{$crop->bid_rate}}" required>
                        </div>

                        <div class="form-group">
                            <label>Message(optional)</label>
                            <input type="text" name="message" value="" class="form-control" placeholder="Enter message">
                        </div>

                        <input  type="submit"  value="Bid Submit" class="btn btn-success btn-block">
                    </form>
                </div>

@endsection