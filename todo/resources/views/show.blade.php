<html>
<head>
    <title>user</title>
</head>
<body>
<p>User</p>
<a href="{{route('user.index')}}">back</a>
<form action="{{route('user.show',$user->id)}}" method="get" enctype="multipart/form-data">

@csrf
   <p>Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Country: {{$user->country}}</p>

</form>
</body>
</html>
