@extends('app')

@section('imageUrl')
{{$announcement->imageUrl}}
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
                <vue-disqus shortname="your_shortname_disqus"></vue-disqus>
            </div>
          </div>
        </div>
      </div>
    </article>
    @endsection





