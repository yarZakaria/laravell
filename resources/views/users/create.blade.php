@extends('layouts.app')

@section('title', 'create user')

@section('content')
<html>
    <body>
        <form action="{{route('users.store')}}" method="post">
        @csrf
            <label>Name</label>
            <input type="text" name="name"/><br>
            <label>Email</label>
            <input type="email" name="email"/><br>
            <label>Password</label>
            <input type="password" name="password"/><br>
            <button type="submit" name="submit" >Submit</button>

</form>
@endsection
</body>
</html>