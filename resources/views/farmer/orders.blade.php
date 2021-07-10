@extends('farmer.headerFooter')
@section('body')

    <div class="row flex-sm-row my-5">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">orders Info</h3>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr class="t1">
                    <th>Sl No</th>
                    <th>Crop name</th>
                    <th>cust Name</th>
                    <th>Bid price </th>
                    <th>message</th>
                    <th>created_at</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                        <td>
                        <a target="_blank" href="" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
                         <a target="_blank" href="" class="btn btn-success"><i class="fas fa-cloud-download-alt"></i></a> 
                    </td>
                </tr>
                   
            </table>
        </div>
    </div>


@endsection