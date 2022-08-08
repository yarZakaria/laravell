@extends('layouts.app')

@section('title', 'show')

@section('content')
<html>
    <body>
        <p>Title</p>
        <p>{{$posts['title']}}</p>
        <p>Body</p>
        <p>{{$posts['body']}}</p>
        <p>User_id</p>
        <p>{{$posts['user_id']}}</p>
</body>
@endsection
</html>