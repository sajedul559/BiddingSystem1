<link href="{{asset('final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<section class="my-3">
    <div class="col-lg-6 mx-auto  jumbotron">
        <form class="form-group" action="{{route('admin_registerSave')}}" method="POST">
            @csrf
            <div>
                <h1 class="text-center">Register Here</h1>
            </div>


            <div class="form-group">
                <!-- Username -->
                <label>Username</label>
                <div>
                    <input type="text" id="username" name="username" placeholder="xyz123" class="form-control" required>
                    <span class="text-danger">{{$errors->has('username') ? $errors->first('username'): ' '}}</span>
                </div>
            </div>

            <div class="form-group">
                <!-- E-mail -->
                <label>E-mail</label>
                <div>
                    <input type="text" id="email" name="email" placeholder="xyz@gmail.com" class="form-control" required>
                    <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ' '}}</span>
                </div>
            </div>


            <div class="form-group">

                <label>Mobile</label>
                <div>
                    <input type="tel" id="mobile" name="mobile" placeholder="8801xxxxxxxxx" class="form-control" required>
                    <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile'): ' '}}</span>
                </div>
            </div>

               <div class="form-group">

                <label>Date of Birth</label>
                <div>
                   <input type="date" class="form-control" id="dob" name="dob" placeholder="" required>
                </div>
               </div>

            <div class="form-group">
                <label>Division</label>
                <select class="form-control" name="division" required>
                    <option value=""><-------Select Your District------------></option>
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
                       <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
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
                <!-- Password-->
                <label>Password</label>
                <div>
                    <input type="password" id="password" name="password" placeholder="Xyz123" class="form-control" required>
                    <span class="text-danger">{{$errors->has('password') ? $errors->first('password'): ' '}}</span>
                </div>
            </div>

            <div class="form-group">
                <!-- Password -->
                <label>Password (Confirm)</label>
                <div>
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Xyz123" class="form-control" required>
                    <span class="text-danger">{{$errors->has('password_confirm') ? $errors->first('password_confirm'): ' '}}</span>
                </div>
            </div>

            <div class="form-group mt-2">
                <!-- Button -->
                <div>
                    <button class="btn btn-block btn-success">SignUp</button>
                </div>
            </div>
            <span>Have an Account?</span><a class="btn btn-success" href="{{route('a_login')}}">Login</a>

        </form>
    </div>
</section>