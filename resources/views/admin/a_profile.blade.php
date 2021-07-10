@extends('admin.headerFooter');
@section('body')
    <div class="row">
        @foreach($newses as $news)
            <div class="col-lg-3 col-md-6 my-4">
                <div class="card ">

                    <a href="#"><img class="card-img-top " width="400" height="200" src="{{asset($news->news_image)}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$news->news_name}}</a>
                        </h4>
                        <h5>{{$news->news_description}}</h5>
                        <p class="card-text lead">{{$news->long_description}}</p>
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <a class="btn btn-success btn-block" target="_blank" href="" class="card-link">Details</a>
                        </div>
                    </div>

                </div>

            </div>
        @endforeach
    </div>

    @endsection