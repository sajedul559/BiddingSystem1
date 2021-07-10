@if($val['action']== "active")
<h1>Your account activated..</h1>Check website..<a href="{{route('home')}}">AGROBID</a>
@else
<h1>Your account disable for unnecessary or bad work found.. For activated Contact with administration </h1>
Check website..<a href="{{route('home')}}">AGROBID</a>
@endif

<h2>Thank You</h2><p href="">{{$val['username']}}</p>