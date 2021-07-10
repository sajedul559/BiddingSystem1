@extends('farmer.headerFooter')
@section('body')

    <div class="row flex-sm-row my-5">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Bid List Info</h3>
            <h3 class="text-center text-success">{{Session::get('msg')}}</h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr class="t1">
                    <th>Sl No</th>
                    <th>Crop name</th>
                    <th>cust Name</th>
                    <th>Bid price </th>
                    <th>message</th>
                    <th>created_at</th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($messages as $message)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$message->crop_name}}</td>
                    <!-- <td>{{$message->cust_username}}</td> -->
                  <td><button data-toggle="modal" data-target="#cust_details">{{$message->cust_username}}</button></td>

                    <td>{{$message->bid_price}}</td>
                    <td>{{$message->message}}</td>
                    <td>{{$message->created_at}}</td>
                   <td>

                  <a href="{{route('customer_profile',['username'=>$message->cust_username])}}" class="btn btn-success mb-sm-2"><i class="fa fa-1x fa-user"></i></a>

                  <a target="_blank" href="{{route('crop_details',['id'=>$message->crop_id])}}" class="btn btn-success mb-sm-2"><i class="fas fa-info-circle"></i></a>

                  <a target="_blank" href="{{route('bids_download_invoice',['id'=>$message->id])}}" class="btn btn-success mb-sm-2"><i class="fas fa-cloud-download-alt"></i></a> 

                       <!--   <a data-toggle="modal" href="#ReplyModal" class="btn btn-success mb-sm-2"><i class="fas fa-reply-all"></i>confirm</a>
                          </td> -->
                        </tr>
             @endforeach   
            </table>
        </div>
    </div>

   


@endsection        


 <!----customer Details Modal start----------->

      <div class="modal" id="cust_details">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3 class="text-center">Buyer Details</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                @php( $details =App\user_register::where('username', $message->cust_username)->first())
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
     <!----customer Details Modal end----------->


                          <!----Reply Modal start----------->

                      <!--  <div class="modal" id="ReplyModal">
                            <div class="modal-dialog">
                                <div class="modal-content bg-light">
                                    <div class="modal-header">
                                        <h3>Confirm Reply</h3>
                                        <button class="close text-dark" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('pay_confirm_message')}}" method="post">
                                         @csrf
                                         
                                          @foreach($messages as $message)
                                        <input type="hidden" name="crop_id" value="{{$message->crop_id}}">
                                        <input type="hidden" name="f_username" value="{{Session::get('f_username')}}">
                                        <input type="hidden" name="crop_name" value="{{$message->crop_name}}">
                                           @if(isset($message->cust_username)) 
                                       <input type="hidden" name="cust_username" value="{{$message->cust_username}}" class="form-control">
                                             @endif 
                                           @endforeach
                                          
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
                                                <input type="tel" name="account_id" value="" class="form-control" placeholder="account Ex:0194*******" required>
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
                        </div> -->

                   
                        
