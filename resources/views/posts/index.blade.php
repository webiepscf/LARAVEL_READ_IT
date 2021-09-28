@extends('template.index')

@section('title')
    Free Bootstrap 4 Template by Colorlib
@endsection

@section('content')
<div class="row d-flex">
    @foreach($posts as $post)
    <div class="col-md-6 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
        <a href="{{ route('posts.show', [
          'post' => $post->id,
          'slug' => \Illuminate\Support\Str::slug($post->title)
        ]) }}" class="block-20" style="background-image: url('{{ asset('assets/images/' . $post->image) }}');">
        </a>
        <div class="text p-4 float-right d-block">
            <div class="topper d-flex align-items-center">
                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                    <span class="day">{{ $post->created_at->format('d') }}</span>
                </div>
                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr">{{ $post->created_at->format('Y') }}</span>
                    <span class="mos">{{ $post->created_at->format('M') }}</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="{{ route('posts.show', [
              'post' => $post->id,
              'slug' => \Illuminate\Support\Str::slug($post->title)
            ]) }}">{{ $post->title }}</a></h3>
          <p>{{ $post->resume }}</p>
          <p><a href="{{ route('posts.show', [
            'post' => $post->id,
            'slug' => \Illuminate\Support\Str::slug($post->title)
          ]) }}" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <div class="block-27">
        <ul>
          <li><a href="#">+</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection