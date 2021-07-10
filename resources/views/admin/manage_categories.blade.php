@extends('admin.headerFooter')
@section('body')

    <div class="row flex-sm-row">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Manage categories Info</h3>
            <h3 class="text-center text-success">{{Session::get('msg')}}</h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr>
                    <th>Sl No</th>
                    <th>a_username</th>
                    <th>categories_name </th>
                    <th>categories_description </th>
                    <th>categories_status </th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($categories as $categorie)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$categorie->a_username}}</td>
                    <td>{{$categorie->categories_name}}</td>
                    <td>{{$categorie->categories_description}}</td>
                    <td>{{$categorie->categories_status}}</td>
                    <td>
                        @if($categorie->categories_status==1)
                        <a href="{{route('categories_status',['id'=>$categorie->id])}}" onclick="return confirm('Are you sure you want to deactive?');" class="btn btn-success"><i class="fas fa-arrow-circle-down"></i></a>
                        @else
                        <a href="{{route('categories_status',['id'=>$categorie->id])}}" onclick="return confirm('Are you sure you want to active?');" class="btn btn-danger"><i class="fas fa-arrow-circle-up"></i></a>
                        @endif

                        <a href="{{route('edit_categories',['id'=>$categorie->id])}}" onclick="return confirm('Are you sure you want to edit?');" class="btn btn-success"><i class="fas fa-edit"></i></a>

                        <a href="{{route('categories_delete',['id'=>$categorie->id])}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger "><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>


@endsection()