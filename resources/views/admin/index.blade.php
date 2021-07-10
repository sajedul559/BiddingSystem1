@extends('admin.headerFooter')

@section('body')

<h1 class="text-primary text-center">Welcome to Administrator</h1>
    <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/admin.jpg')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Administrator
                </h4>
                <hr>
                <p class="card-text lead">
                   Admin can Create new categorie, news, permission to Published crop and check all farmer, buyer information.
                </p>
                <!-- <a href="#" class="btn btn-dark btn-block">Login here</a> -->
              </div>
            </div>
        </div>

    </div>
</div>

    @endsection