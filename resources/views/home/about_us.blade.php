@extends('home.headerFooter')


@section('title')
about us
@endsection

@section('body')
<section id="page-header"class="mt-2" style="background-image: url('{{ url('public/final_eagri/img/a.jpg')}}'); height:200px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto text-center text-light">
                <h1>About Us</h1>
                <p class="lead">Who We Are And What We Do</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center text-justify">
                <h2>Mission</h2><p class="lead">To provide technology and services to farmers, customer help them expand their business and provide them with a wider market, And to improve the present farming processes and to provide knowledge about recent agriculture issues.</p>
                <h2>Vision</h2><p class="lead">To provide a helping hand to the farmers and customer improving their lives through the medium
                of technology, thereby improving the agriculture sector in the Bangladesh Economy .</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ url('public/final_eagri/img/crop.jpg')}}" class="img-fluid " alt="">
            </div>
        </div>
    </div>
</section>

<section class="py-2">
    <div class="container">
        <div class="row">

            <div class="col-md-6 text-center">
                <img src="{{ url('public/final_eagri/img/service.jpg')}}" class="img-fluid " alt="">
            </div>

            <div class="col-md-6 align-self-center text-justify">
                <h2>About E-Agriculture</h2>
                <p class="lead">Web server of Farmer product can give farmer greater profitability for their product and selling product easily. For this service farmer registered on this site and post their products. Buyer Can registered and buy necessary product by bid from website. In the website number of product posted in different categories and manufacture that can buy and sell anyone who are registered on this site. </p>
            </div>
        </div>
    </div>
</section>

<!-- Icon Boxes -->
<section id="icon-boxes" class="py-5 text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-success">
                    <div class="card-body">
                        <i class="fa fa-envelope mb-3"></i>
                        <h3>website</h3>
                        <p class="lead text-justify">The main objectives of the website online auction system to eliminate the involvement of intermediate persons in market</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-primary">
                    <div class="card-body">
                        <i class="fa fa-envelope mb-3"></i>
                        <h3>Farmer</h3>
                        <p class="lead text-justify">To allow farmers in freedom to set the price that make agriculture as a profitable zone </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger">
                    <div class="card-body">
                        <i class="fa fa-envelope mb-3"></i>
                        <h3>Buyer</h3>
                        <p class="lead text-justify">It helps the wholesalers or buyers in buying produce from larger number of farmers.</p>
                    </div>
                </div>
            </div>
        </div>
   
        </div>
</section>




@endsection