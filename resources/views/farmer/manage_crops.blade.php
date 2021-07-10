@extends('farmer.headerFooter')
@section('body')

        <section>
            <div class="row flex-sm-row my-5">
            <div class="col-md-12 col-sm-12 ">
                    <h3 class="">Manage Crops Info</h3>
                    <h5 class="text-center text-success">{{Session::get('msg')}}</h5>
                    <h3 class="text-center text-success"></h3>
                    <table class="table table-bordered  text-center table-hover table-responsive-lg">
                        <tr class="t1">
                            <th>Sl No</th>
                            <th>Crop_name </th>
                            <!-- <th>Crop_Session </th> -->
                            <th>crop_type </th>
                            <th>crop_quantity</th>
                            <th>bid_rate</th>
                            <th>crop_description</th>
                            <th>last_date_bidding</th>
                            <th>Image1</th>
                            <th>Image2</th>
                            <th>Action</th>
                        </tr>

                         @php($i=1)
                        @foreach($crops as $crop)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$crop->crop_name}}</td>
                                <!-- <td>{{$crop->crop_session}}</td> -->
                                <td>{{$crop->crop_type}}</td>
                                <td>{{$crop->crop_quantity}}</td>
                                <td>{{$crop->bid_rate}}</td>
                                <td>{{$crop->crop_description}}</td>
                                <td>{{$crop->last_date_bidding}}</td>
                          
                                <td> <img src="{{url($crop->crop_image)}}"width="200" height="150"></td>
                                <td> <img src="{{url($crop->crop_image2)}}"width="200" height="150"></td>
                                 <td>
                                    @if($crop->status==0)
                                    <a href="{{route('condition_crop',['id'=>$crop->id])}}" onclick="return confirm('Are you sure you want to active?');" class="btn btn-danger "><i class="fas fa-arrow-circle-up"></i></a>
                                    @else
                                     <a href="{{route('condition_crop',['id'=>$crop->id])}}" onclick="return confirm('Are you sure you want to deactive?');" class="btn btn-success "><i class="fas fa-arrow-circle-down"></i></a>
                                     @endif

                                    <a href="{{route('edit_crop',['id'=>$crop->id])}}" onclick="return confirm('Are you sure you want to edit?');" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    
                                    <a href="{{route('delete_crop',['id'=>$crop->id])}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger "><i class="fas fa-trash-alt"></i></a>
                                </td>
                 
                            </tr>

                            @endforeach
                    </table>
                </div>
            </div>
            </section>

        <section class=" m-5 float-right">
            {{$crops}}
        </section>

@endsection()