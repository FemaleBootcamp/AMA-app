@extends('layouts.app')
@section('content')
<nav class="navbar navbar-inverse">

    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('admin/ama_announcements/create') }}">Create a Announcement</a>
    </ul>
</nav>

<h1>All Announcements</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Text</td>
            <td>User ID</td>
            <td>Created at</td>
            <td>Actions</td>

        </tr>
    </thead>
    <tbody>
    @foreach($ama_announcements as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->text }}</td>
            <td>{{ $value->user_id }}</td>
            <td>{{ $value->created_at }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('admin/ama_announcements/' . $value->id) }}">Show</a>
                <a class="btn btn-small btn-success" href="{{ URL::to('admin/ama_announcements/' . $value->id . '/edit') }}">Edit</a>
                {{ Form::open(array('url' => 'admin/ama_announcements/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Announcement', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection
