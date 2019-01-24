<?php 
use Illuminate\Support\Facades\Input;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Announcement</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('ama_announcements') }}">Announcements</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('ama_announcements') }}">View All </a></li>
        <li><a href="{{ URL::to('ama_announcements/create') }}">Create new</a>
    </ul>
</nav>

<h1>Create Announcement</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'ama_announcements')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('text', 'Text') }}
        {{ Form::text('text', Input::old('text'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('user_id', 'User ID') }}
        {{ Form::number('user_id', Input::old('user_id'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('created_at', 'Created at') }}
        {{ Form::date('created_at', Input::old('created_at'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('updated_at', 'Updated at') }}
        {{ Form::date('updated_at', Input::old('updated_at'), array('class' => 'form-control')) }}
    </div>

    

    {{ Form::submit('Create the Announcement!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>