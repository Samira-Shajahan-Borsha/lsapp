<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{   
        public function index()
        {
            // return Post::all();
            // $posts = Post::all();
            // $posts = DB::select('SELECT * from posts');
            // $posts = Post::orderBy('title','desc')->take(2)->get();
            // $posts = Post::orderBy('title','desc')->paginate(2);

            $posts = Post::orderBy('id','desc')->get();
            return view('posts.index')->with('posts',$posts);
        }
        public function create()
        {
            return view('posts.create');
        }

        public function store(Request $request)
        {
            $this->validate($request,[
                'title' => 'required',
                'body' => 'required'
            ]);
            //CREATE POST
            $post = new Post;
            $post->title = $request->title;
            $post->body = $request->body;
            $post->save();

            return redirect('posts/create')->with('success','Post Created');
            // dd($request->all());
            
        }

        public function show($id)
        {
            // return Post::find($id);
            // return Post::where('title','Post two')->get();

            $post =  Post::find($id);
            return view('posts.show')->with('post',$post);
        }
        public function edit($id)
        {
            $post =  Post::find($id);
            return view('posts.edit')->with('post',$post);
        }
        public function update(Request $request, $id)
        {
            $this->validate($request,[
                'title' => 'required',
                'body' => 'required'
            ]);
            //Update POST
            $post = Post::find($id);
            $post->title = $request->title;
            $post->body = $request->body;
            $post->save();

            return redirect('/posts')->with('success','Post Updated');

        }
        public function delete($id)
        {
            $post = Post::find($id);
            $post->delete();
            return redirect("/posts")->with('success','Post Removed');
        }
        




    /* public function PostList(){
        $post1 = new Post();
        $post1->title = 'Post One';
        $post1->body = 'This is first post';
        $post1->save();

        $post1 = new Post();
        $post1->title = 'Post One';
        $post1->body = 'This is first post';
        $post1->save();
    } */


}
