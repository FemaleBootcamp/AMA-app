@extends('app')

@section('imageUrl')
{{ URL::asset($imageUrl) }}
@endsection

@section('content')
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h2 class="section-heading">{{$ama->title}}</h2>
            <p>{{$ama->content}}</p>
            <p>{{$ama->person}}</p>
            <div class="comments">
            </div>
          </div>
        </div>
      </div>
    </article>
@endsection
