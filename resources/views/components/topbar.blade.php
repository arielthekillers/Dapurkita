<!-- resources/views/components/topbar.blade.php -->
<div class="topbar">
    <div class="date-time">{{ now()->format('l, d F Y') }}</div>
    <div class="login">
        @if (Route::has('login'))
            @guest
                <a href="{{ route('login') }}">Login</a>
            @else
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @endguest
        @endif
    </div>
</div>
