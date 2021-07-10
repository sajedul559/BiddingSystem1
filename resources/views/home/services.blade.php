@extends('home.headerFooter')

@section('title')
services
@endsection

@section('body')


    <section id="service-header" class="mt-2" style="background-image: url('{{ url('public/final_eagri/img/a.jpg')}}'); height:200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center text-light">
                    <h1>Services</h1>
                    <p class="lead">What this website serve for</p>
                </div>
            </div>
        </div>
    </section>


      <!-- Blog Section -->
  <section class="py-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/home.png')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Farmer
                </h4>
                <hr>
                <p class="card-text lead">
                  Farmers are sell Agriculture products by taking picture of the crops and add details.
                </p>
                <a href="#" class="btn btn-dark btn-block">Login here</a>
              </div>
            </div>
        </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/service.jpg')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Buyer
                </h4>
                <hr>
                <p class="card-text lead">
                  Buyer can buy Agriculture products with a bidding system which is to be called e_bidding.  
                </p>
                <a href="#" class="btn btn-dark btn-block">Login here</a>
              </div>
            </div>
        </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/admin.jpg')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Administrator
                </h4>
                <hr>
                <p class="card-text lead">
                   Admin permission to Published crop and check all farmer, buyer information.
                </p>
                <a href="#" class="btn btn-dark btn-block">Login here</a>
              </div>
            </div>
        </div>

      </div>
    </div>
  </section>


<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center text-justify">
               <p class="lead">➢ Farmers can choose their Buyers who quote more i.e. they can choose whom to sell their crops on the basis of the price the customers are ready to pay. </p>
              <p class="lead">  ➢ Buyers purchase crops anytime at home by bid.</p>
              <p class="lead">  ➢ The Online Bidding Application helps the farmers meet the buyers online. </p>
              <p class="lead">  ➢ The winner of the bid and the seller of that crop get an email as notification about the confirmation of the crop. </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ url('public/final_eagri/img/s.jpg')}}" class="img-fluid " height="500px" alt="">
            </div>
        </div>
    </div>
</section>

    @endsection