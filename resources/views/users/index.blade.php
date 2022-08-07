@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<html>
    <body>
    <table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
        <td>{{$user['id']}}</td>
        <td><a href="{{route('users.show',['id'=>$user['id']])}}">{{$user['name']}}</a></td>
        <td>{{$user['email']}}</td>
        <td><a href="{{route('users.edit',['id'=>$user['id']])}}">Edit</a></td>
        <td><a href="{{route('users.destroy',['id'=>$user['id']])}}">Delete</a></td>
    </tbody>
</tr>
@endforeach
</tr>
</table>
@endsection
    </body>
</html>
