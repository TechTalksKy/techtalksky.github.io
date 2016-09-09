@extends('layouts.page')

@section('title', 'Writer Theme | Components')

@section('body_classes')

@section('content')

<div class="row">

            @include('partials.nav')

            <div class="sidebar col-md-5 col-sm-12 ">

                <span class="menu-trigger writer-icon side-writer-icon animated fadeInDown">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>

                <div class="site-info">
                    <div class="primary-info">
                    <h1>Writer</h1>
                        <p>A minimal blogging theme to put your content on show. <a href="{{ URL::to('post.html') }}">Look at the features.</a> </p>

                        <p>Content is king</p>
                    </div>
                    <div class="secondary-info">

                        <p><a class="btn btn-default" href="{{ URL::to('#') }}"><i class="fa fa-user-plus"></i>Join Us</a>
                    </p></div>
                </div>

            </div>

            <div class="col-md-7 col-sm-12 col-md-offset-5 main-content">

                <div class="home-page-posts animated fadeIn ">

                    <!-- Headings -->
                    <h2>Headings</h2>
                    <div class="bs-example bs-example-type">
                        <table class="table"><tbody><tr><td><h1>h1. Bootstrap heading</h1></td>
                            </tr><tr><td><h2>h2. Bootstrap heading</h2></td>
                            </tr><tr><td><h3>h3. Bootstrap heading</h3></td>
                            </tr><tr><td><h4>h4. Bootstrap heading</h4></td>
                            </tr><tr><td><h5>h5. Bootstrap heading</h5></td>
                            </tr><tr><td><h6>h6. Bootstrap heading</h6></td>
                            </tr></tbody></table></div>

                    <h2>Buttons</h2>
                    <div class="bs-example">
                        <button type="button" class="btn btn-default">Default</button>
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-link">Link</button>
                    </div>

                    <h2>Tables</h2>
                    <div class="bs-example">
                        <table class="table"><thead><tr><th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr></thead><tbody><tr><td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr><tr><td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr><tr><td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr></tbody></table></div>

                    <div class="bs-example">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 35%">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                            <div class="progress-bar progress-bar-warning" style="width: 20%">
                                <span class="sr-only">20% Complete (warning)</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" style="width: 10%">
                                <span class="sr-only">10% Complete (danger)</span>
                            </div>
                        </div>
                    </div>

                    <h2>Labels</h2>
                    <div class="bs-example">
                        <span class="label label-default">Default</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-success">Success</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>
                    </div>

                    <h2>Alerts</h2>
                    <div class="bs-example">
                        <div class="alert alert-success">
                          <strong>Well done!</strong> You successfully read this important alert message.
                        </div>
                        <div class="alert alert-info">
                          <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                        </div>
                        <div class="alert alert-warning">
                          <strong>Warning!</strong> Better check yourself, you're not looking too good.
                        </div>
                        <div class="alert alert-danger">
                          <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        </div>
                    </div>

                    <h2>Panels</h2>
                    <div class="bs-example">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>

                    <h2>Well</h2>
                    <div class="bs-example">
                        <div class="well">
                          Look, I'm in a well!
                        </div>
                    </div>

            </div><!-- Home page posts -->

            <div class="home-footer">
                <a href="{{ URL::to('post.html') }}"> About </a>
                <i class="link-spacer"></i>
                <a href="{{ URL::to('post.html') }}"> Writer 2014 </a>
            </div>

            </div><!-- main content -->

        </div>
@stop
