@extends('buyer.headerFooter')

@section('title')
payment form
@endsection

@section('body')

  <h5 class="text-center text-success">{{Session::get('msg')}}</h5>
  
<div class="row">
<div class="col-lg-7 jumbotron mx-auto mt-5">
	 <form action="{{route('manually_payment')}}" method="post">
                      @csrf
                    <h1 class="text-center text-success">Payment Details</h1>
                    <h4 class="text-justify font-weight-bold"> Please pay {{$confirms->confirm_price}}TK To {{$confirms->account_type}} Account {{$confirms->account_id}} for order confirmation . Now Send pay account, Transition ID & all of details </h4>

                     <input type="hidden" name="crop_id" value="{{$confirms->crop_id}}">
                     <input type="hidden" name="f_username" value="{{$confirms->f_username}}">
                     <input type="hidden" name="c_username" value="{{Session::get('c_username')}}">
                        <div class="form-group">
                            <label>customer_name</label>
                            <input type="tel" name="customer_name" value="" class="form-control" placeholder="Enter customer_name" required>
                        </div>


                        <div class="form-group">
                            <label>customer_mobile</label>
                            <input type="text" name="customer_mobile" value="" class="form-control" placeholder="Enter customer_mobile" required>
                        </div>

                        <div class="form-group">
                            <label>customer_email</label>
                            <input type="text" name="customer_email" value="" class="form-control" placeholder="Enter customer_email" required>
                        </div>


                    <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label>Division</label>
                       <select class="form-control" name="division" required>
                            <option value=""><-------Select Your Division------------></option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Rangpur">Rangpur</option>
                        </select>
                    </div>
      
                    <div class=" form-group col-md-6 mb-3">
                        <label>Zip</label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="Enter your zip code" required>
                    </div>
                </div>

                        <div class="form-group">
                            <label>address</label>
                            <input type="text" name="address" value="" class="form-control" placeholder="Enter address" required>
                        </div>

                        @php( $price =App\Bid_message::where('crop_id', $confirms->crop_id)->where('f_username', $confirms->f_username)->max('bid_price'))

                        <input type="hidden" name="bid_price" value="{{$price}}">

                        <div class="form-group">
                            <label>amount</label>
                            <input type="text" name="pay_amount" value="" class="form-control" placeholder="Enter payment amount" required>
                        </div>

                        <div class="form-group">
                            <label>Transition ID</label>
                            <input type="text" name="transaction_id" value="" class="form-control" placeholder="Enter payment transition id" required>
                        </div>

                        <input  type="submit"  value="Send for Order" class="btn btn-success btn-block">
           </form>
</div>
</div>


@endsection