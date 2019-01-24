@extends('app')

@section('imageUrl')
{{$imageUrl}}
@endsection

@section('content')
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h2 class="section-heading">{{$announcement->title}}</h2>
            <p>{{$announcement->text}}</p>
            <div class="comments">
            </div>
          </div>
        </div>
      </div>
    </article>
@endsection





