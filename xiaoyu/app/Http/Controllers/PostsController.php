<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Void_;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //posts = Post::all();

        //return view('posts.index',compact('posts'));

        $post = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return "I am the methods that use create";

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request->all();

        $input = $request->all();

        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();

            $file->move('images', $name);

            $input['file'] = $name;
        }

        Post::create($input);

//        $file =  $request->file('file'); //$_FILES['NAME']['FILE']
//
//        echo "<br>";
//
//        echo $file->getClientOriginalName();
//
//        echo "<br>";
//
//        echo $file->getClientSize();

        //Post::create($request->all());
        //return redirect('/posts');

        //$input = $request->all();
        //$input['title'] = $request->title;

        //Post::create($request->all());

        //$post = new Post;
        //$post->title = $request->title;
        //$post->save();

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
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact(){

        //$people = ['Leon Li','Xiaoyu','JT Loo'];
        $people = [];

        return view('contact', compact('people'));
    }

    public function show_post($id, $name, $pass){
        //return view('post')->with('id', $id);

        return view('posts', compact('id','name','pass'));
    }
}
