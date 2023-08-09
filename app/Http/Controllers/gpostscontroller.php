<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Storage;
use App\Models\MyPost;

class gpostscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()//constructor.
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);//created a constructor. When the user clicks on the create post button.
    }

    public function index()
    {
        //$myposts = MyPost::all();
        $myposts = MyPost::orderBy('id', 'asc')->paginate(10);
        return view('myposts.index')->with('myposts', $myposts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myposts.create')->with('myposts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $this->validate($request, [
    'title' => 'required',
    'body' => 'required',
    //validate the image
    'cover_image' => 'image|nullable|max:1999'
   ]);

   //Handle file upload.

   if($request->hasFile('cover_image')){
    //get filename with the extension.
    $filenameWithExt = $request->file('cover_image')->getClientOriginalName(); //Got this.

    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); //the name in full
    $extension = $request->file('cover_image')->getClientOriginalExtension();

    $fileNameToStore = $filename.'_'.time().'.'.$extension;

    $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

   }
   else{
    $fileNameToStore = 'noimage.jpg';
   }

   $post = new MyPost;
   $post->title = $request->input('title');
   $post->body = $request->input('body');
   $post->user_id = auth()->user()->id;
   $post->cover_image = $fileNameToStore;
   $post->save();

   return redirect('/myposts')->with('success', 'Post Created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //supposed to show the body content when the title link is clicked.
        $post = MyPost::find($id);
        return view('myposts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = MyPost::find($id);
             //check for correct user
             if(auth()->user()->id !== $post->user_id){
                return redirect('/myposts')->with('error', 'Unauthorised page.');
            }
        return view('myposts.edit')->with('post', $post);
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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('cover_image')){
            //get filename with the extension.
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName(); //Got this.

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); //the name in full
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

           }


        $post = MyPost::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/myposts')->with('success', 'Post Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = MyPost::find($id);
        $post->destroy($id);
            //check for correct user
            if(auth()->user()->id !== $post->user_id){
                return redirect('/myposts')->with('error', 'Unauthorised page.');
            }

            if($post->cover_image != 'noimage.jpg'){
                //Delete the image.
                Storage::delete('public/cover_images/'.$post->cover_image);
            }
        return redirect('/myposts')->with('success', 'Post Deleted Successfully.');
    }
}