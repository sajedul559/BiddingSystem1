@extends('admin.headerFooter')
@section('body')

    <div class="row flex-sm-row">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Manage News Info</h3>
            <h5 class="text-center text-success">{{Session::get('msg')}}</h5>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr>
                    <th>Sl No</th>
                    <th>UserName</th>
                    <th>News Name </th>
                    <th>short_description </th>
                    <th>long description</th>
                    <th>News Image</th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($newses as $news)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$news->username}}</td>
                    <td>{{$news->news_name}}</td>
                    <td>{{$news->news_description}}</td>
                    <td class="text-justify">{{$news->long_description}}</td>
                    <td><img height="150" width="150" src="{{url($news->news_image)}}"></td>
                    <td>
                    <a href="{{route('edit_news',['id'=>$news->id])}}" onclick="return confirm('Are you sure you want to edit?');" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="{{route('delete_news',['id'=>$news->id])}}" onclick="return confirm('Are you sure you want to delete this item?');" class=" btn btn-danger "><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>


@endsection