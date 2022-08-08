@extends('layouts.app')
@section('title', 'edit')
@section('content')
<div class="contaainer">
<form action="{{route('posts.update',['id'=>$posts['id']])}}" method="post">
    @method('PUT')
    @csrf
<div class="mb-3">
<label>Title :</label>
<input type="text" class="form-control" name="title" value="{{$posts['title']}}"><br><br>

<label>Body :</label>
<input type="text" class="form-control" name="body" value="{{$posts['body']}}"><br><br>
<label>Enabled :</label>
<input type="text" class="form-control" name="enabled" value="{{$posts['enabled']}}"><br><br>
<label>User_id :</label>
<input type="text" class="form-control" name="user_id" value="{{$posts['user_id']}}"><br><br>
<button type="submit" name="submit" >Edit</button>
@endsection