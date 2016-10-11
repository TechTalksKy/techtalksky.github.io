<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SponsorController extends Controller
{
    public function index()
    {
        $submissions = Submission::paginate(30);
        return view('page.submissions', compact('submissions'));
    }

    public function show(Submission $submission)
    {
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
