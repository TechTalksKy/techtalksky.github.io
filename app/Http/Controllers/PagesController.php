<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        return view('page.index');
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
        return view('events.' . $name);
    }

    public function talk($name)
    {
        return view('talk.' . $name);
    }
}
