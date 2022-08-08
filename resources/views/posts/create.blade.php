@extends('layouts.app')

@section('title', 'create post')

@section('content')
<html>
    <body>
        <form action="{{route('posts.store')}}" method="POST">
        @csrf
            <label>Title</label>
            <input type="text" name="title"/><br>
            <label>Body</label>
            <input type="text" name="body"/><br>
            <label>Enabled</label>
            <input type="number" name="enabled"/><br>
            <label>User_ID</label>
            <input type="text" name="user_id"/><br>
            <button type="submit" name="submit" >Submit</button>
</form>
@endsection
</body>
</html>