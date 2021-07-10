@extends('admin.headerFooter')

@section('body')
    <div>
        <h1 class="text-center text-primary">News</h1>
    </div>
    <div class="col-lg-6 jumbotron mx-auto">

        <form class="form-group" method="POST" action="{{route('update_news_db')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="username" class="form-control" value="{{Session::get('a_username')}}" required/>
            <input type="hidden" name="id" class="form-control" value="{{$news->id}}" required/>
            <div class="form-group">
                <label class="font-weight-bolder">News Name:</label>
                <input type="text" name="news_name" class="form-control" value="{{$news->news_name}}" required/>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">Short Description</label>
                <input type="text" name="news_description" class="form-control" value="{{$news->news_description}}" required/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Long Description</label>
                <textarea rows="10" cols="5" class="form-control" name="long_description"  required>value="{{$news->long_description}}"</textarea>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">News image-</label>
                <input type="file" class="form-control" name="news_image" accept="image/*"><img width="120" height="120" src="{{asset($news->news_image)}}">
            </div>

            <div class="form-group">
                <div>
                    <input class="btn-success btn-block" type="submit" name="btn" value="Update news Info">
                </div>
            </div>
        </form>
    </div>
@endsection