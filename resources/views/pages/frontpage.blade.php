<!-- resources/views/pages/frontpage.blade.php -->
@extends('layouts.app')

@section('title', 'Welcome to Algoritma Kaltim')

@section('main-content')
    <h1>Latest News</h1>
    <div class="news-list">
        @foreach ($latestNews as $news)
            <article>
                <h2><a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a></h2>
                <p>{{ Str::limit($news->content, 150) }}</p>
            </article>
        @endforeach
    </div>
@endsection
