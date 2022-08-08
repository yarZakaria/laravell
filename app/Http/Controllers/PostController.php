<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::all()  ;
        $posts = Post::paginate(5);
        return view('posts.index')->with(['posts'=> $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $pdata= $request->all('title','body','enabled','user_id');
      
      
        Post::create(
          ['title' => $pdata['title'],
           'body' =>  $pdata['body'],
           'enabled' =>  $pdata['enabled'],
           'user_id' => $pdata['user_id']
           ]
        );
        return view('posts.index');
    }

    public function show($id)
    {  $posts=Post::find($id);
        return view('posts.show')->with(['posts'=>$posts]);
    }


    public function edit($id)
    {
       
        $posts=Post::find($id);
        return view('posts.edit')->with(['posts'=>$posts ]);
    }


    public function update(Request $request, $id)
    {
        $pdata= $request->only('title','body','enabled','user_id');
        Post::where('id', $id)->update([
            'title' => $pdata['title'] ,
         'body' =>  $pdata['body'],
         'enabled' =>  $pdata['enabled'],
           'user_id' => $pdata['user_id']
        ]);

    }


    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return view('posts.index');
    }


}
