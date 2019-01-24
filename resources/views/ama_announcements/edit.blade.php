@extends('layouts.app')
@section('content')

<h1>Edit {{ $ama_announcements->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($ama_announcements, array('route' => array('ama_announcements.update', $ama_announcements->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('text', 'Text') }}
        {{ Form::text('text', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('user_id', 'User ID') }}
        {{ Form::number('user_id', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('created_at', 'Created at') }}
        {{ Form::date('created_at', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('updated_at', 'Updated at') }}
        {{ Form::date('updated_at', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit the Announcement!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection