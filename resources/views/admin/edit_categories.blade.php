@extends('admin.headerFooter')

@section('body')
     <div>
        <h1 class="text-center text-primary">Categories</h1>
    </div>
    <div class="col-lg-6 jumbotron mx-auto">

        <form class="form-group" method="POST" action="{{route('update_categories_db')}}">
            @csrf

             <input type="hidden" name="id" class="form-control" value="{{$categorie->id}}" required/>

            <input type="hidden" name="a_username" class="form-control" value="{{Session::get('a_username')}}" required/>

            <div class="form-group">
                <label class="font-weight-bolder"> Categories Name:</label>
                <input type="text" name="categories_name" class="form-control" value="{{$categorie->categories_name}}" required/>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">Categories Description</label>
                <textarea rows="5" cols="5" class="form-control" name="categories_description" placeholder="" required>{{$categorie->categories_description}}</textarea>
            </div>


            <div class="form-group">
                <div>
                    <input class="btn-success btn-block" type="submit" name="btn" value="Update Categories Info">
                </div>
            </div>
        </form>
    </div>
@endsection