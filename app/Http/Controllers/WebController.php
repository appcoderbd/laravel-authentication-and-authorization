<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Laravel\Socialite\Facades\Socialite;


class WebController extends Controller
{
    //
    public function pending() {

        // dd('This is page');


        Gate::authorize('pending_post', Post::class);

        $posts = Post::where('is_status', '0')->get();

        // dd($posts);

        return view('post.pending', compact('posts'));



    }

    public function post_publish(Post $post){

        Gate::authorize('pending_post' , Post::class);

        $post->is_status = true;
        $post->save();

        return redirect()->back()->with('success', 'Post published successfully!');
    }

    // GitHub Login

    public function redirectToProvider()
    {
        //dd('here');
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $provider = Socialite::driver('github')->user();

        //dd($user);

        $existUser = User::query()
                    ->where('email', $provider->getEmail())
                    ->first();

        if($existUser){

            Auth::login($existUser);
            return to_route('dashboard');

        }

       // dd('Create a first account');

       $user = User::create([

        'name' => $provider->getName(),
        'email' => $provider->getEmail(),
        'password' => str()->random()

       ]);

       Auth::login($user);
       return to_route('posts.index');

        // $user->token;

        
        

        
    }
}