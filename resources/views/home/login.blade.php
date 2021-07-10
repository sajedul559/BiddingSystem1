@extends('home.headerFooter')

@section('title')
Login form
@endsection

@section('body')


    <div class="alert alert-success alert-dismissable text-center mt-3">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <strong> Login as farmer for sell crop or buyer for bid & buy </strong>Details<a class="alert-link ml-1" href="{{route('services')}}">Check it out</a>
    </div>

    <section class="my-3">
        <div class="col-lg-6 mx-auto  jumbotron">
            <form class="form-group" action="{{route('login_check')}}" method="POST">
                @csrf
                <div>
                    <h3 class="text-success">{{Session::get('reg_success')}}</h3>
                    <h3 class="text-success">{{Session::get('login_error')}}</h3>
                    <h1 class=" text-center">Login Here</h1>
                </div>

                  <div class="form-group row">
                 <!-- Login Type-->
                  <label class="col-sm-2">Login Type</label>
                    <div class="col-sm-10">
                       <select class="form-control" name="register_as" required>
                        <option value=""><-------Role As------------></option>
                        <option value="farmer">Farmer</option>
                        <option value="customer">Buyer</option>
                        </select>
                    </div>
                </div>

                 <div class="form-group row">
                   <!-- E-mail-->
                    <label class="col-sm-2">E-mail</label>

                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                     <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ' '}}</span>
                    </div>
                </div>


                  <div class="form-group row">
                <!-- Password-->
                        <label class="col-sm-2">Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" name="password" placeholder="Enter your Password" class="form-control" required>
                            <span class="text-danger">{{$errors->has('password') ? $errors->first('password'): ' '}}</span>
                        </div>
                    </div>

                <div class="control-group mt-2">
                    <!-- Button -->
                    <div>
                        <button class="btn btn-block btn-success">Login</button>
                    </div>
                </div>
            </form>
           <span>Not an Account?</span><a class="btn btn-outline-success" href="{{route('signup')}}">SignUp</a>
            <button class="btn btn-outline-success" data-toggle="modal" data-target="#ForgotPasswordModal">Forgot Password</button>
        </div>
    </section>








    <div class="modal" id="ForgotPasswordModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3>Forgot Password</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pw_change_link')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label class="">Role As</label>
                            <select class="form-control" name="register_as" required>
                                <option value=""><-------Role As------------></option>
                                <option value="farmer">Farmer</option>
                                <option value="customer">Buyer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="" class="form-control" placeholder="Enter your email" required>
                            <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ' '}}</span>
                        </div>
                        <input type="submit" value="Send" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection