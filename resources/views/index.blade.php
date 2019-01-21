@extends('app')

@section('imageUrl')
{{$vm->imageUrl}}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

        @foreach($vm->data as $ama)
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                  {{$ama->title}}
              </h2>
              <h3 class="post-subtitle">
                  {{$ama->person}}
              </h3>
            </a>
            <p class="post-meta">{{$ama->content}}</p>
          </div>
         @endforeach

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
    </div>
@endsection

