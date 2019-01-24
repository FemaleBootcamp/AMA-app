<!DOCTYPE html>
<html>
<head>
    <title>Admin AmaAnnouncements</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('ama_announcements') }}">Ama Announcements</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('ama_announcements') }}">View All Announcements</a></li>
        <li><a href="{{ URL::to('ama_announcements/create') }}">Create a Announcement</a>
    </ul>
</nav>

<h1>All Announcements</h1>

<!-- will be used to show any messages -->
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
            <td>Updated at</td>
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
            <td>{{ $value->updated_at }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the announcement (uses the destroy method DESTROY /ama_announcements/{id} -->
                {{ Form::open(array('url' => 'ama_announcements/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Announcement', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the announcement (uses the show method found at GET /ama_announcements/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('ama_announcements/' . $value->id) }}">Show</a>

                <!-- edit this announcement (uses the edit method found at GET /ama_announcements/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('ama_announcements/' . $value->id . '/edit') }}">Edit</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>