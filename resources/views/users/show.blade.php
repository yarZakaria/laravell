@extends('layouts.app')

@section('title', 'show')

@section('content')
<html>
    <body>
        <p>Name</p>
        <p>{{$users['name']}}</p>
        <p>Email</p>
        <p>{{$users['email']}}</p>
</body>
@endsection
</html>