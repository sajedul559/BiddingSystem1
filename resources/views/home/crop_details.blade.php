@extends('home.headerFooter')

@section('title')
Crop details
@endsection

@section('body')



 <!--  <script src="{{url('public/final_eagri/vendor/bootstrap/js/jquery-1.8.3.min.js')}}"></script>
  <script src="{{url('public/final_eagri/vendor/elevateZoom/jquery.elevatezoom.js')}}"></script> -->



   <h1 class="text-center text-success">{{Session::get('msg')}}</h1>
    <div class="row mt-5">                                                
        <!----Image Slider start----------->
        <div class="col-lg-6">
             <div>
                <div id="carouselExampleIndicators" class="carousel slide my-2" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img  height="150" width="300" src='{{url($crop->crop_image)}}'  alt="First slide"/>
                        </div> 
                        {{-- <div class="carousel-item">
                            <img  height="300" width="600"  src="{{url($crop->crop_image2)}}" alt="Second slide"/>
                        </div> --}}
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
            </div>
        </div>

        <!----Image Details start----------->
        <div class="col-lg-6">
            <div>
                <div class=" font-weight-bold float-center display-5">
                           <h3>Crop-Name:-- <span class="text-primary">{{$crop->crop_name}}</span></h3>
                            <!-- <p>Crop-type:--{{$crop->crop_type}}</p> -->
                            <p>Quantity:--{{$crop->crop_quantity}}</p>
                            <p>Location:--{{$crop->crop_location}}</p>
                            <p>Bid Rate:--{{$crop->bid_rate}}TK</p>
                            <p>Finished Date:--{{$crop->last_date_bidding}}</p>
                            <p>Condition:--{{$crop->condition}}</p>
                            <p>Description:--{{$crop->crop_description}}</p>
                            <small>created_at:--{{$crop->created_at}}</small><br>
                            <!-- <span>Farmer:---<a href="">{{$crop->username}}</a></span> -->
                            <p class="mt-3">Farmer:---<button class="btn btn-outline-success" data-toggle="modal" data-target="#farm_details">{{$crop->username}}</button></p>
                </div>
                <div class="">
                    @if(Session::get('c_username'))
                       @if(!Carbon\Carbon::now()->greaterThan($crop->last_date_bidding))
                     <button class="btn btn-success btn-block" data-toggle="modal" data-target="#BidModal">Bid here</button> 
                         @else <h4 class="text-danger">Bidding Time Finished</h4>
                       @endif
                    @else

                        <a class="btn btn-success btn-block" target="_blank" href="{{route('login')}}">Bid here</a>

                    @endif
                </div>
            </div>

    <!----Farmer Details Modal start----------->

      <div class="modal" id="farm_details">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3 class="text-center">Farmer Details</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                @php( $details =App\farmer_register::where('username', $crop->username)->first())
                <div class="modal-body">
                   <table class="table table-bordered  text-center table-hover table-responsive-lg">
                    
                    <tr>
                      <th>USERNAME-</th>
                      <td>{{$details->username}}</td>
                    </tr>

                    <tr>
                       <th>EMAIL-</th>
                        <td>{{$details->email}}</td>
                    </tr>

                    <tr>
                      <th>MOBILE-</th>
                      <td>{{$details->mobile}}</td>
                    </tr>
                       
                    <tr>
                       <th>DIVISION-</th>
                       <td>{{$details->division}}</td>
                    </tr>

                    <tr>
                      <th>ADDRESS-</th>
                      <td>{{$details->address}}</td>
                    </tr>

                    <tr>
                        <th>ZIP-CODE-</th>
                        <td>{{$details->zip_code}}</td>
                    </tr>
                        
                       
                    <tr>
                       <th>GENDER-</th>
                      <td>{{$details->gender}}</td>
                    </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
     <!----Farmer Details Modal end----------->

        </div>

    </div>



    <!----Bidding Modal start----------->

    <div class="modal" id="BidModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3 class="text-center">Bid Here</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('bid_msg_saved')}}" method="post">
                        @csrf
                        <input type="hidden" name="crop_id" value="{{$crop->id}}" class="form-control">
                        <input type="hidden" name="crop_name" value="{{$crop->crop_name}}" class="form-control">
                        <input type="hidden" name="f_username" value="{{$crop->username}}" class="form-control">
                        <input type="hidden" name="cust_username" value="{{Session::get('c_username')}}" class="form-control">

                        <div class="bid">
                            Bid Rate::---<span class="ml-4">{{$crop->bid_rate}}TK</span>
                        </div>

                    @php( $price =App\Bid_message::where('crop_id', $crop->id)->max('bid_price'))
                          
                        
                        <div class="bid">
                            Best Bidder::---
                            @if($price==null)
                               <span>Not any bid</span>
                            @else 
                            <span class="ml-4">{{$price}}TK</span>
                            @endif

                        </div>

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
            </div>
        </div>
    </div>



    <!----bidding list Modal start----------->

      <div class="row justify-content-center">
          <div class="col-md-8">
              <div>
                  <h1><small class="pull-right"></small> Bids </h1>
              </div>

              @if($bids_msg->isEmpty())
                 Not Found Any Bid
              @endif   
              <!-- <h1 class="text-success">{{Session::get('msg')}}</h1> -->
              @foreach($bids_msg as $bid)
              <div class="comments-list">

                  <p><small class="float-right">{{$bid->created_at}}</small> </p>
                  <span class="clearfix"></span>
                  <div class="media">
                      <div class="media-body">
                          <h4 class="media-heading user_name">USER:---{{$bid->cust_username}}</h4>
                          BID:---{{$bid->bid_price}}TK
                          <p> 
                                
                                 @if($bid->cust_username==Session::get('c_username') )
                                   @if(!Carbon\Carbon::now()->greaterThan($crop->last_date_bidding))
                                 <a href="{{route('bid_delete',['id'=>$bid->id,'crop_id'=>$bid->crop_id])}}">delete</a>
                                   @endif
                                @endif


                                @if($crop->username==Session::get('f_username'))
                                -<a data-toggle="modal" href="#ReplyModal">Reply_confirm</a>
                                @endif          
                          </p>
                      </div>
                  </div>
                  </div>
              @endforeach
                  </div>
              </div>


    <!----Reply Modal start----------->

    <div class="modal" id="ReplyModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3>Confirm Reply</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pay_confirm_message')}}" method="post">
                 @csrf
                        <input type="hidden" name="crop_id" value="{{$crop->id}}" class="form-control">
                        <input type="hidden" name="f_username" value="{{$crop->username}}" class="form-control">
                        <input type="hidden" name="crop_name" value="{{$crop->crop_name}}" class="form-control">
                        @if(isset($bid->cust_username))
                        <input type="hidden" name="cust_username" value="{{$bid->cust_username}}" class="form-control">
                        @endif

                       <div class="form-group">
                        <label class="font-weight-bolder">Account Type</label>
                        <select class="form-control" name="account_type" required>
                             <option value="">---Select a type</option>
                             <option value="bkash">bkash</option>
                             <option value="rocket">rocket</option>
                              <option value="nagad">nagad</option>
                        </select>
                       </div>

                        <div class="form-group">
                            <label>Account-Id</label>
                            <input type="tel" name="account_id" value="" class="form-control" placeholder="account ex:018********" required>
                            <span class="text-danger">{{$errors->has('account_id') ? $errors->first('account_id'): ' '}}
                        </div>

                        <div class="form-group">
                            <label>Confirm price</label>
                            <input type="number" name="confirm_price" value="" class="form-control" placeholder="Enter confirrm price" min="1" required>
                        </div>

                        <div class="form-group">
                            <label>Message(optional)</label>
                            <input type="text" name="message" value="" class="form-control" placeholder="Enter message">
                        </div>

                        <input  type="submit"  value="Reply Confirm" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
