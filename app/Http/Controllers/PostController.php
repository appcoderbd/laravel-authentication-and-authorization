<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        Gate::authorize('viewAny',Post::class);
        $posts = Post::where('is_status', true)->get();
        return view('post.post-list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Gate::authorize('create', Post::class);
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // dd('reached method');
        //
        Gate::authorize('create', Post::class);

        $validated = $request->validated();

        if($request->hasFile('post_image')){
            $filePath = $request->file('post_image')->store('post_image','public');
            $validated['post_image'] = $filePath;
        }

        // dd($validated);

        try{

            Post::create($validated);
            return redirect()->back()->with('status','Post created successfully');

        }catch(Exception $e){

            return redirect()->back()->withErrors(['status' => 'Post Create field']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        Gate::authorize('view', $post);
        // dd('This is ok');
        return view('post.view-post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

}
