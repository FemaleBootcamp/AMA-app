<!DOCTYPE html>
<html>
<head>
    <title>Show Announcement</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('ama_announcements') }}">Announcement</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('ama_announcements') }}">View All</a></li>
        <li><a href="{{ URL::to('ama_announcements/create') }}">Create new</a>
    </ul>
</nav>

<h1>Showing {{ $ama_announcements->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $ama_announcements->title }}</h2>
        <p>
            <strong>Text:</strong> {{ $ama_announcements->text }}<br>
            
        </p>
        <p>
            <strong>User ID:</strong> {{ $ama_announcements->user_id }}<br>
            
        </p>
        <p>
            <strong>Created at:</strong> {{ $ama_announcements->created_at }}<br>
            
        </p>
        <p>
            <strong>Updated at:</strong> {{ $ama_announcements->created_at }}<br>
            
        </p>
    </div>

</div>
</body>
</html>