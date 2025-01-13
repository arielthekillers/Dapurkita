<!-- resources/views/components/sidebar.blade.php -->
<div class="sidebar">
    <h3>Popular News</h3>
    <ul>
        @foreach ($popularNews as $news)
            <li><a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a></li>
        @endforeach
    </ul>
</div>
