@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<html>
    <body>
        <form action="{{route('users.store')}}" methode="POST">
        @csrf
            <label>Name</label>
            <input type="text" name="uname"/><br>
            <label>Email</label>
            <input type="email" name="uemail"/><br>
            <button type="submit" name="submit" >Submit</button>

</form>
@endsection
</body>
</html>