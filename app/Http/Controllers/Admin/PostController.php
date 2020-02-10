<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
use App\Model\user\Tag;
use App\Model\user\Category;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::all();
        return view('admin.post.postindex',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $cats = Category::all();
        return view('admin.post.addpost', compact('tags','cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
        $this->validate($request,[
        'title'=>'required',
        'subtitle'=>'required',
        'slug'=>'required',
        'body'=>'required',
        ]);
        $posts =  new Post;
        $posts->title = $request->title;
        $posts->subtitle = $request->subtitle;
        $posts->slug = $request->slug;
        $posts->status = $request->status;
        $posts->body = $request->body;
        $posts->save();
        $posts->tag()->sync($request->tags);
        $posts->categories()->sync($request->categories);
        
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::with('tag','categories')->where('id',$id)->first();
        //return $posts;
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.edit',['posts'=>$posts,'tags'=>$tags,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);
        $posts = Post::find($id);
        $posts->title = $request->title;
        $posts->subtitle = $request->subtitle;
        $posts->slug = $request->slug;
        $posts->status = $request->status;
        $posts->body = $request->body;
        $posts->tag()->sync($request->tags);
        $posts->categories()->sync($request->categories);
        $posts->save();
        return redirect(route('post.index'));
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Post::where('id',$id)->delete();
       return redirect()->back();
    }
}
