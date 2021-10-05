@extends('template.index')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
<p class="mb-5">
    <img src="{{ asset('assets/images/' . $post->image) }}" alt="" class="img-fluid">
  </p>

  <h1 class="mb-3 h1">{{ $post->title }}</h1>

  {{ $post->content }}

  {{-- Tags du post --}}
  @include('tags._index', ['tags' => $post->tags])

  {{-- Author du post --}}
  @include('authors._show', ['author' => $post->author])

  {{-- Comments du post --}}
  @include('comments._index', ['comments' => $post->comments])
  
  {{-- Formulaire d'ajout d'un comment --}}
  @include('comments._add-form')
  
@endsection