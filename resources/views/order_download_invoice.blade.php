

 <link href="{{url('public/final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="row flex-sm-row my-5">
        <div class="col-md-12 col-sm-12 ">
                    <h3 class="text-center text-success"> Order Invoice Info</h3>
                    <table class="table table-bordered  text-center">
                        <tr>
                            <th>Farmer_Username:</th>
                            <td>{{$order->f_username}}</td>
                        </tr>

                          <tr>
                            <th>Customer_Username:</th>
                            <td>{{$order->c_username}}</td>
                        </tr>

                          <tr>
                            <th>Customer Name:</th>
                            <td>{{$order->name}}</td>
                        </tr>

                          <tr>
                            <th>Crop Name:</th>
                            <td>{{$crop->crop_name}}</td>
                        </tr>

                           <tr>
                            <th>Customer Email:</th>
                            <td>{{$order->email}}</td>
                        </tr>

                          <tr>
                            <th>Customer Phone:</th>
                            <td>{{$order->phone}}</td>
                        </tr>

                         <tr>
                            <th>Bid Amount:</th>
                            <td>{{$order->bid_price}}</td>
                        </tr>

                        <tr>
                            <th>Pay Amount:</th>
                            <td>{{$order->amount}}</td>
                        </tr>

                           <tr>
                            <th>Customer Address:</th>
                            <td>{{$order->address}}</td>
                          </tr>

                        <tr>
                            <th>Customer division:</th>
                            <td>{{$order->division}}</td>
                        </tr>

                          <tr>
                            <th>Customer Zip_code:</th>
                            <td>{{$order->zip}}</td>
                        </tr>

                          <tr>
                            <th>transaction_id:</th>
                            <td>{{$order->transaction_id}}</td>
                        </tr>

                            <tr>
                            <th>currency:</th>
                            <td>{{$order->currency}}</td>
                        </tr>

                        <tr>
                            <th>Crop Image:</th>
                            <td> <img src="{{url($crop->crop_image)}}"width="200" height="150"></td>
                        </tr>

                    </table>
                </div>
    </div>

    <div>Welcome from <a><img src="{{ url('public/final_eagri/img/agri.png')}}"></a>Limited</div>