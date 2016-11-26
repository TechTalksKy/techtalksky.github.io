<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('page.index', compact('posts'));
    }

    public function about()
    {
        return view('page.contact');
    }
    
    public function author()
    {
        return view('page.author');
    }

    public function page()
    {
        return view('page.page');
    }

    public function favorites()
    {
        return view('page.favorites');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function post()
    {
        return view('page.post');
    }

    public function altHome()
    {
        return view('page.alt-home');
    }

    public function category()
    {
        return view('page.category');
    }

    public function meetup()
    {
        return view('posts.first-meetup');
    }

    public function event($name)
    {
        $post = Post::where('slug', $name)->first();
        return view('events.show', compact('post'));
    }

    public function talk($name)
    {
        $post = Post::where('slug', $name)->first();
        return view('talk.show', compact('post'));
    }
}
