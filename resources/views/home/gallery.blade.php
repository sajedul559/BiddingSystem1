@extends('home.headerFooter')


@section('title')
Photo Gallery
@endsection

@section('body')
<section id="page-header"class="mt-2" style="background-image: url('{{ url('public/final_eagri/img/a.jpg')}}'); height:200px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto text-center text-light">
                <h1>Photo Gallery</h1>
                <p class="lead">Some of Agriculture Images</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->

<style type="text/css">
    .img-fluid{
        height: 300px;
        width: 450px;
    }
</style>

 <!-- Photo Gallery -->
  <section id="gallery" class="py-3 text-center">
      <div class="row py-0 py-sm-3">
        <div class="col-md-4 mb-sm-2">
          <div>
            <a href="{{ url('public/final_eagri/img/1.jpg')}}">
              <img src="{{ url('public/final_eagri/img/1.jpg')}}" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-sm-2">
          <div>
            <a href="{{ url('public/final_eagri/img/2.jpg')}}">
              <img src="{{ url('public/final_eagri/img/2.jpg')}}" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-sm-2">
          <div>
            <a href="{{ url('public/final_eagri/img/3.jpg')}}">
              <img src="{{ url('public/final_eagri/img/3.jpg')}}" class="img-fluid" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="row py-0 py-sm-2">
        <div class="col-md-4 mb-sm-2">
          <div>
            <a href="{{ url('public/final_eagri/img/4.jpg')}}">
              <img src="{{ url('public/final_eagri/img/4.jpg')}}" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-sm-2">
          <div>
            <a href="{{ url('public/final_eagri/img/a.jpg')}}">
              <img src="{{ url('public/final_eagri/img/s.jpg')}}" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-sm-2">
          <div>
            <a href="{{ url('public/final_eagri/img/1.jpg')}}">
              <img src="{{ url('public/final_eagri/img/1.jpg')}}" class="img-fluid" alt="">
            </a>
          </div>
        </div>
      </div>
  </section>

@endsection