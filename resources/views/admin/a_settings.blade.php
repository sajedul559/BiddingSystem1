    @extends('admin.headerFooter')
    @section('body')

   <section>
        <div class="container my-5">
            <!-- toggleable dynamic tab starts here -->
            <div class="other-section">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a data-toggle="pill" class="p-3 nav-link active" href="#profile">Profile Details</a></li>
                    <li class="nav-item"><a data-toggle="pill" class="p-3 nav-link" href="#updateprofile">Update Profile</a></li>
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
                                            <th>Gender:</th>
                                            <td>{{$user->gender}}</td>
                                        </tr>

                                          <tr>
                                            <th>profile_pic:</th>
                                            <td><img src="{{url($user->profile_pic)}}" height="200" width="200" alt="empty"></td>
                                        </tr>

                                          <tr>
                                            <th>created_at:</th>
                                            <td>{{$user->created_at}}</td>
                                        </tr>


                                    </table>
                           </div>
                    </div>

                    <div id="updateprofile" class="tab-pane">
                        <div class="col-lg-8 mx-auto">
                          <form class="form-group" action="{{route('adminregisterUpdate')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div>
                                    <h1 class="text-center">Edit Here</h1>
                                </div>

                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="form-group">
                                    <!-- Username -->
                                    <label>Username</label>
                                    <div>
                                        <input type="text" id="username" name="username" class="form-control" value="{{$user->username}}" required readonly="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- E-mail -->
                                    <label>E-mail</label>
                                    <div>
                                        <input type="text" id="email" name="email"  class="form-control" value="{{$user->email}}" required readonly="">
                                        
                                    </div>
                                </div>


                                <div class="form-group">

                                    <label>Mobile</label>
                                    <div>
                                        <input type="tel" id="mobile" name="mobile" class="form-control" value="{{$user->mobile}}" required>
                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile'): ' '}}</span>
                                    </div>
                                </div>

                                 <div class="form-group">

                                    <label>Date of Birth</label>
                                    <div>
                                       <input type="date" class="form-control" id="dob" name="dob"  value="{{$user->dob}}" required>
                                    </div>
                               </div>

                                <div class="form-group">
                                    <label>Division</label>
                                    <select class="form-control" name="division" required>
                                        <option value="{{$user->division}}">{{$user->division}}</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Comilla">Comilla</option>
                                        <option value="Rangpur">Rangpur</option>
                                    </select>
                                </div>


                        <div class="form-group">
                        <!-- address-->
                            <label>Address</label>
                            <div>
                               <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}" required>
                            </div>
                       </div>


                        <div class=" form-group">
                         <!-- Gender-->
                          <label>Gender</label>
                          
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>Male
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">Female
                            </div>
                          </div>

                        </div>

                       <div class="form-group">
                            <label class="font-weight-bolder">Profile image-</label><br>
                            <input type="file" name="profile_image" accept="image/*">
                            <span>{{$errors->has('profile_image') ? $errors->first('profile_image'): ' '}}</span>
                       </div>
          
                        <div class="form-group mt-2">
                            <!-- Button -->
                            <div>
                                <button class="btn btn-block btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

                </div>
            </div>
            <!-- toggleable dynamic tab ends here -->
    </div>

   </section>
@endsection