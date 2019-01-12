@extends('app')

@section('title')

Ask Me Anythings @yield('title')

@endsection

@section('header')
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1> @yield('site-heading')</h1>
            <span class="subheading">@yield('subheading')</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection

@section('content')
<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
              <a href="post.html">
                <h2 class="post-title">
                    @yield('post-title')
                </h2>
                <h3 class="post-subtitle">
                  @yield('post-subtitle')
                </h3>
              </a>
              <p class="post-meta">@yield('post-meta')
                <a href="#">Start Bootstrap</a>
                on September 24, 2018</p>
            </div>
            <!-- Pager -->
            <div class="clearfix">
              <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
          </div>
        </div>
      </div>
@endsection

