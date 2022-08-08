@extends('layouts.app')

@section('title', 'list')

@section('content')
<html>
    <body>
    <table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Enabled</th>
            <th scope="col">Published_at</th>
            <th scope="col">User_id</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Deleted_at</th>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
        <td>{{$post['id']}}</td>
        <td><a href="{{route('posts.show',['id'=>$post['id']])}}">{{$post['title']}}</a></td>
        <td>{{$post['body']}}</td>
        <td>{{$post['enabled']}}</td>
        <td>{{$post['published_at']}}</td>
        <td>{{$post['user_id']}}</td>
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>
        <td>{{$post['deleted_at']}}</td>
        <td><a href="{{route('posts.edit',['id'=>$post['id']])}}">Edit</a>
        <form method="post" action="{{route('posts.destroy',['id'=>$post['id']])}}">
            @method('DELETE')
            @csrf
           <button name="delete" >delete</button></form></td>
    

    </tbody>
</tr>
@endforeach
</tr>
</table>
@endsection
    </body>
</html>