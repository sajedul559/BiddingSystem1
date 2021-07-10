    @extends('admin.headerFooter')
    @section('body')

    <div class="container my-5">
        <main>
            <!-- toggleable dynamic tab starts here -->
            <div class="other-section">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a data-toggle="pill" class="nav-link p-2 active" href="#profile">Profile Details</a></li>
                    <li class="nav-item"><a data-toggle="pill" class="nav-link p-2" href="#verification">verification</a></li>
                </ul>

                <div class="tab-content">
                    <div id="profile" class="tab-pane active">
                         <div class="col-md-12 col-sm-12 ">
                                    <h3 class="text-center ">Profile Details Info</h3>
                                    <h5 class="text-center text-success">{{Session::get('msg')}}</h5>
                                    <table class="table table-bordered  text-center">
                                        <tr>
                                            <th>Name:</th>
                                            <td>{{$user->username}}</td>
                                        </tr>

                                          <tr>
                                            <th>Email:</th>
                                            <td>{{$user->email}}</td>
                                         </tr>

                                          <tr>
                                            <th>Mobile:</th>
                                            <td>{{$user->mobile}}</td>
                                        </tr>

                                          <tr>
                                            <th>Date of Birth:</th>
                                            <td>{{$user->dob}}</td>
                                        </tr>

                                         <tr>
                                            <th>Division:</th>
                                            <td>{{$user->division}}</td>
                                        </tr>

                                          <tr>
                                            <th>Address:</th>
                                            <td>{{$user->address}}</td>
                                         </tr>

                                           <tr>
                                            <th>Address:</th>
                                            <td>{{$user->zip_code}}</td>
                                         </tr>

                                          <tr>
                                            <th>Gender:</th>
                                            <td>{{$user->gender}}</td>
                                        </tr>

                                          <tr>
                                            <th>profile_pic:</th>
                                            <td><img src="{{url($user->profile_pic)}}" height="200" width="200" alt="null"></td>
                                        </tr>

                                          <tr>
                                            <th>created_at:</th>
                                            <td>{{$user->created_at}}</td>
                                        </tr>


                                    </table>
                           </div>
                    </div>

                    

                <div id="verification" class="tab-pane fade">
                    @if($user->NID_1!="empty")

                      <div class="col-lg-6 mx-auto">
                         <table class="table table-bordered  text-center">
                    <tr>
                        <th>Nid_frontside:</th>
                        <td><img src="{{url($user->NID_1)}}"></td>
                    </tr>

                      <tr>
                        <th>Nid_Backside:</th>
                         <td><img src="{{url($user->NID_2)}}"></td>
                    </tr>

                          </table>
                        </div>

                     @else
                     <h1>NID verification Not completed</h1>
                        @endif

                    </div>

                </div>
            </div>
            <!-- toggleable dynamic tab ends here -->
        </main>
    </div>

@endsection