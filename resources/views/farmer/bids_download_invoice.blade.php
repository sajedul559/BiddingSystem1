

 <link href="{{url('public/final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="row flex-sm-row my-5">
        <div class="col-md-12 col-sm-12 ">
                    <h3  class="text-center text-success"> Bid Invoice Info</h3>
                    <table class="table table-bordered  text-center">
                        <tr>
                            <th>Name:</th>
                            <td>{{$Bid->crop_name}}</td>
                        </tr>

                          <tr>
                            <th>Farmer Name:</th>
                            <td>{{$Bid->f_username}}</td>
                        </tr>

                          <tr>
                            <th>Customer Name:</th>
                            <td>{{$Bid->cust_username}}</td>
                        </tr>

                          <tr>
                            <th>Customer Email:</th>
                            <td>{{$user->email}}</td>
                        </tr>

                           <tr>
                            <th>Customer Mobile:</th>
                            <td>{{$user->mobile}}</td>
                        </tr>

                          <tr>
                            <th>Customer Division:</th>
                            <td>{{$user->division}}</td>
                        </tr>

                           <tr>
                            <th>Customer Address:</th>
                            <td>{{$user->address}}</td>
                          </tr>


                          <tr>
                            <th>Customer Zip_code:</th>
                            <td>{{$user->zip_code}}</td>
                        </tr>

                          <tr>
                            <th>Bid price:</th>
                            <td>{{$Bid->bid_price}}</td>
                        </tr>

                            <tr>
                            <th>Message:</th>
                            <td>{{$Bid->message}}</td>
                        </tr>

                            <tr>
                            <th>Send Date:</th>
                            <td>{{$Bid->created_at}}</td>
                        </tr>

                    </table>
                </div>
    </div>

     <div>Welcome from <a><img src="{{ url('public/final_eagri/img/agri.png')}}"></a>Limited</div>