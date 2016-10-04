<?php

namespace App\Http\Controllers;

use App\Submission;
use App\Http\Requests;
use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function show()
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
