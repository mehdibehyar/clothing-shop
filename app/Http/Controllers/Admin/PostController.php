<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Faker\Core\File;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:show_posts')->only(['index']);
        $this->middleware('can:create_post')->only(['create','store']);
        $this->middleware('can:edit_post')->only(['edit','update']);
        $this->middleware('can:delete_post')->only(['destroy']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts=Post::query();
        if ($search=\request('search')){
            $posts->Where('title','LIKE',"%{$search}%");
        }


        $posts=$posts->paginate(10);
        return view('admin.posts.all',compact('posts'));
    }


    public function fetch_data(Request $request)
    {
        if ($request->ajax()){
            $posts=Post::query()->paginate(10);
            return view('admin.posts.page',compact('posts'))->render();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $data=$request->validate([
            'title'=>'required',
            'descriptions.*.image'=>'required',
            'descriptions.*.description'=>'required',
            'descriptions'=>'array|required'
        ]);


        $post=auth()->user()->posts()->create([
            'title'=>$request->title,
        ]);
        $descriptions=collect($request->descriptions);
        $descriptions->each(function ($item)use($post,$request){
            $description=$post->discriptions()->create([
                'title'=>$item['title'],
                'image'=>$item['image'],
                'description'=>$item['description']
            ]);
        });



        return redirect(route('admin.posts.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {


        $data=$request->validate([
            'title'=>'required',
            'descriptions.*.image'=>'required',
            'descriptions.*.description'=>'required',
            'descriptions.*.title'=>'required',
            'descriptions'=>'array|required'
        ]);

        $post->update([
            'title'=>$data['title'],
        ]);

        $post->discriptions()->delete();
        $descriptions=collect($data['descriptions']);
        $descriptions->each(function ($item)use($post){
            $post->discriptions()->create($item);
        });


        return redirect(route('admin.posts.index'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('admin.posts.index'));
    }
}

