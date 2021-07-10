@extends('admin.headerFooter')

@section('body')
    <div>
        <h1 class="text-center text-primary">News</h1>
    </div>
    <div class="col-lg-6 jumbotron mx-auto">

        <form class="form-group" method="POST" action="{{route('save_news_db')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="username" class="form-control" value="{{Session::get('a_username')}}" required/>

            <div class="form-group">
                <label class="font-weight-bolder">News Name:</label>
                <input type="text" name="news_name" class="form-control" placeholder=" " required/>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">Short Description</label>
                <input type="text" name="news_description" class="form-control" placeholder="" required/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Long Description</label>
                <textarea rows="10" cols="5" class="form-control" name="long_description" required></textarea>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">News image-</label>
                <input type="file" class="form-control" name="news_image" accept="image/*" required>
            </div>


            <div class="form-group">
                <div>
                    <input class="btn-success btn-block" type="submit" name="btn" value="Save news Info">
                </div>
            </div>
        </form>
    </div>
@endsection