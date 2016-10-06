<?php

namespace App\Http\Controllers;

use Auth;
use App\Submission;
use App\Http\Requests;
use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function index()
    {
        if (! Auth::check()) {
            return redirect('/');
        }

        $submissions = Submission::paginate(30);
        return view('page.submissions', compact('submissions'));
    }

    public function show(Submission $submission)
    {
        if (! Auth::check()) {
            return redirect('/');
        }
        return view('page.submission', compact('submission'));
    }

    public function create()
    {
        return view('page.submitTalk');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'author_name' => 'required',
            'email' => 'required|email',
            'avatar' => 'sometimes|url',
            'description' => 'required',
            'body' => 'required',
            'title' => 'required',
            'availability' => 'required',
            'city' => 'required'
        ]);
        Submission::create($request->all());
        return redirect('/');
    }
}
