<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Speaker;
use App\Submission;
use App\Http\Requests;
use Illuminate\Http\Request;

class TalkController extends Controller
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

    public function publish(Submission $submission)
    {
        $speaker = Speaker::firstOrCreate([
            'email' => $submission->email
        ]);
        $speaker->fill([
            'name' => $submission->author_name,
            'bio' => $submission->bio,
            'avatar' => $submission->avatar
        ])->save();
        
        $date = \Carbon\Carbon::parse($submission->availability . config('meetup.start_time'));
        
        $post = Post::firstOrCreate([
            'slug' => str_slug($date->format('Y-m-d').'-'.$submission->title)
        ])->fill([
            'speaker_id' => $speaker->id,
            'meetup_date' => $date->format('Y-m-d H:i:s'),
            'title' => $submission->title,
            'city' => $submission->city,
            'description' => $submission->description,
            'content' => $submission->body,
            'type' => 'meetup',
        ])->save();

        return redirect('/');
    }
}
