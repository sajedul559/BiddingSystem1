@extends('home.headerFooter')

@section('title')
News Info
@endsection

@section('body')

              <section class="py-5">
              <div class="container">
                <div class="row">
                     @foreach($newses as $news)
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card">
                        <img src="{{url($news->news_image)}}" class="card-img-top img-fluid" alt="">
                        <div class="card-body">
                          <h4 class="card-title">{{$news->news_name}}
                          </h4>
                          <hr>
                          <p class="card-text lead">
                            {{$news->news_description}}
                          </p>
                          <a href="#" class="btn btn-dark">Details</a>
                        </div>
                      </div>
                  </div>
                        @endforeach
                </div>
              </div>
            </section>

           
        


    @endsection