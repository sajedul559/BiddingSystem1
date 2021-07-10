@extends('home.headerFooter')

@section('title')
signup form
@endsection

@section('body')

<h1 class="text-success mt-5">{{Session::get('reg_success')}}</h1>

    <section class="my-5">
    <div class="col-lg-7 mx-auto  jumbotron">
        <form class="form-group" action="{{route('registerSave')}}" method="POST">
            @csrf
            <div>
                <h1 class="text-center">Register Here</h1>
            </div>


             <div class="form-group row">
                 <!-- Registration Type-->
                  <label class="col-md-2">Registration Type</label>
                    <div class="col-md-10">
                       <select class="form-control" name="register_as" required>
                        <option value=""><-------Role As------------></option>
                        <option value="farmer">Farmer</option>
                        <option value="customer">Buyer</option>
                        </select>
                    </div>
                </div>


              <div class="form-group row">
                  <!-- Username-->
                    <label class="col-md-2">Username</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                     <span class="text-danger">{{$errors->has('username') ? $errors->first('username'): ' '}}</span>
                    </div>
              </div>


                 <div class="form-group row">
                   <!-- E-mail-->
                    <label class="col-md-2">E-mail</label>

                    <div class="col-md-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                     <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ' '}}</span>
                    </div>
                </div>


            <div class="form-group row">
                <!-- Mobile-->
                <label class="col-md-2">Mobile</label>
                <div class="col-md-10">
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Your mobile" required>
                    <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile'): ' '}}</span>
                </div>
            </div>

             <div class="form-group row">
                <!-- Date of Birth-->
                <label class="col-md-2">Date of Birth</label>
                <div class="col-md-10">
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="" required>
                </div>
            </div>


            <div class="form-group row">
                <!-- Division-->
                <label class="col-md-2">Division</label>
                 <div class="col-md-10">
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

            </div>

        
            <div class="form-group row">
               <!-- Address-->
                <label class="col-md-2">Address</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your address" required>
                </div>
            </div>



            <div class="form-group row">
             <!-- Zip code-->
                <label class="col-md-2">Zip code</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" id="zip_code" name="zip_code" placeholder="Enter Your zip_code"  required>
                    <span class="text-danger">{{$errors->has('zip_code') ? $errors->first('zip_code'): ' '}}</span>
                </div>
            </div>

               <div class=" form-group row">
                 <!-- Gender-->
                  <label class="col-md-2 pt-0">Gender</label>
                  
                  <div class="col-md-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>Male
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">Female
                    </div>
                  </div>

                </div>

            <div class="form-group row">
                <!-- Password-->
                <label class="col-md-2">Password</label>
                <div class="col-md-10">
                    <input type="password" id="password" name="password" placeholder="Enter password ex: Xyz123" class="form-control" required>
                    <span class="text-danger">{{$errors->has('password') ? $errors->first('password'): ' '}}</span>
                </div>
            </div>

            <div class="form-group row">
                <!-- Confirm Password -->
                <label class="col-md-2">Password (Confirm)</label>
                <div class="col-md-10">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Enter password ex: Xyz123" class="form-control" required>
                    <span class="text-danger">{{$errors->has('password_confirm') ? $errors->first('password_confirm'): ' '}}</span>
                </div>
            </div>

            <div class="form-group mt-2">
                <!-- Button -->
                <div>
                    <button class="btn btn-block btn-success">SignUp</button>
                </div>
            </div>
        </form>
        <span>Have an Account?</span><a class="btn btn-outline-success" href="{{route('login')}}">Login</a>
    </div>
    </section>

@endsection