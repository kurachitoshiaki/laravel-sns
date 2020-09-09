@extends('app')

@section('title', '記事一覧')
@include('nav')

@section('content')
  <div class="container">
    @foreach($articles as $article) 
      @include('articles.list')
    @endforeach
  </div>
@endsection