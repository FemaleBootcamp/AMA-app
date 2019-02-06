@extends('layouts.app')
@section('content')

<h1>Create Announcement</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'admin/ama_announcements')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('text', 'Text') }}
        {{ Form::text('text', old('text'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Announcement!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
@endsection