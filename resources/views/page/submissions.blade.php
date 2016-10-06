@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <td>Title</td>
                                <td>Speaker</td>
                                <td>Email</td>
                                <td>City</td>
                                <td>Availability</td>
                            </thead>
                            <tbody>

                            

                                @foreach ($submissions as $submission)
                                <tr>
                                    <td>
                                        <a href="/submissions/{{ $submission->id }}">
                                            {{ $submission->title }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $submission->author_name }}
                                    </td>
                                    <td>
                                        {{ $submission->email }}
                                    </td>
                                    <td>
                                        {{ $submission->city }}
                                    </td>
                                    <td>
                                        {{ $submission->availability }}
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
