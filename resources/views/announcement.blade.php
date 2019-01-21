@extends('app')

@section('imageUrl')
{{$vm->imageUrl}}
@endsection

@section('content')
    @foreach($vm->data as $ann)
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h2 class="section-heading">{{$ann->title}}</h2>
            <p>{{$ann->text}}</p>
            <div class="comments">
                {{-- <vue-disqus shortname="your_shortname_disqus"></vue-disqus> --}}
            </div>
          </div>
        </div>
      </div>
    </article>
    @endforeach
@endsection





