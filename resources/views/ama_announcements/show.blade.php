@extends('layouts.app')
@section('content')

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
@endsection