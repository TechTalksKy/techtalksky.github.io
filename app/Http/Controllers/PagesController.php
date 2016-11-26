<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $posts = json_decode(file_get_contents(base_path() . '/posts.json'));
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
        $post = $this->getPostData($name);
        return view('events.show', compact('post'));
    }

    public function talk($name)
    {
        $post = $this->getPostData($name);
        // dd($post);
        return view('talk.show', compact('post'));
        return view('talk.' . $name, compact('post'));
    }

    public function getPostData($slug)
    {
        $posts = collect(json_decode(file_get_contents(base_path() . '/posts.json')));
        $post = $posts->where('slug', $slug);
        return $post->first();
    }
}
