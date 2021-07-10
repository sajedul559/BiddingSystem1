@extends('home.headerFooter')

@section('body')

    <section class="my-3">
        <div class="col-lg-6 mx-auto  jumbotron">
            <form class="form-group" action="{{route('admin_pass_change_save',['email'=>$email])}}" method="POST">
                @csrf
                <div>
                    <h1 class=" text-center">Change Password</h1>
                </div>




                <div class="control-group">
                    <!-- Password-->
                    <label>Password</label>
                    <div>
                        <input type="password" id="password" name="password" placeholder="Xyz123" class="form-control" value="">
                        <span class="text-danger">{{$errors->has('password') ? $errors->first('password'): ' '}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Password -->
                    <label>Password (Confirm)</label>
                    <div>
                        <input type="password" id="password_confirm" name="password_confirm" placeholder="Xyz123" class="form-control">
                        <span class="text-danger">{{$errors->has('password_confirm') ? $errors->first('password_confirm'): ' '}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Button -->
                    <div>
                        <button class="btn btn-block btn-success">Change password</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection