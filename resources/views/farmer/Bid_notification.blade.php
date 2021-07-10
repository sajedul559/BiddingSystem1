
{{--@php(dd($val))--}}
<h2>New Bid From {{ $val['cust_username']}}</h2>
<p>Crop Name: {{$val['crop_name']}}</p>
<p>Bid price {{$val['bid_price']}}</p>


<h4>For details ,Login website<a href="{{route('home')}}">GreenLife</a></h4>

Thanks {{$val['f_username']}}
