<link href="{{asset('final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <section class="">
        <div class="col-lg-6 mx-auto mt-5  jumbotron">
            <form class="form-group" action="{{route('admin_login_check')}}" method="POST">
                @csrf
                <div>
                    <h1 class=" text-center">Login Here</h1>
                    <h3>{{Session::get('msg')}}</h3>
                    <h3>{{Session::get('login_error')}}</h3>
                </div>
                <div class="form-group">
                    <!-- E-mail -->
                    <label>E-mail</label>
                    <div>
                        <input type="text" id="email" name="email" placeholder="your email" class="form-control" required>
                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ' '}}</span>
                    </div>
                </div>



                <div class="control-group">
                    <!-- Password-->
                    <label>Password</label>
                    <div>
                        <input type="password" id="password" name="password" placeholder="your password" class="form-control" required>
                    </div>
                </div>

                <div class="control-group ">
                    <!-- Button -->
                    <div>
                        <button class="btn btn-block btn-success mt-2">Login</button>
                    </div>
                </div>
            </form>
           <button class="btn btn-outline-success" data-toggle="modal" data-target="#ForgotPasswordModal">Forgot Password</button>
          <!--   <a href="{{route('admin_signup')}}" class="btn btn-outline-success">signup</a> -->
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
                <form action="{{route('admin_pw_change_link')}}" method="post">

                    @csrf
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

<script src="{{asset('final_eagri/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('final_eagri/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>