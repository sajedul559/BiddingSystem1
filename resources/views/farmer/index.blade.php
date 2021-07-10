@extends('farmer.headerFooter')


@section('body')
  
  <section  class="py-5">
     <h3 class="text-success text-center">{{Session::get('f_login')}}</h3>
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/home.png')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Farmer
                </h4>
                <hr>
                <p class="card-text lead text-justify">
                  Farmers are sell Agriculture products by taking picture of the crops and add details.
                </p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/2.jpg')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Farmer
                </h4>
                <hr>
                <p class="card-text lead text-justify">
                   This bidding will have minimun bid rate & specific time duration, which will be set by the Farmer. 
                </p>
              </div>
            </div>
        </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/service.jpg')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Farmer
                </h4>
                <hr>
                <p class="card-text lead text-justify">
                   At the end of time limit, crop/product will be sold to the highest bidder that confirm by the Farmers 
                </p>
              </div>
            </div>
        </div>

      </div>
    </div>
  </section>

    @endsection