<nav class="navbar">
    <div class="container">
        <a href="{{ url('/') }}" class="logo">Algoritma Kaltim</a>
        <ul class="menu">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            @foreach ($categories as $category)
                <li class="dropdown">
                    <a href="{{ route('category', $category->slug) }}">{{ $category->category }}</a>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu">
                        <li><a href="#">Subcategory 1</a></li>
                        <li><a href="#">Subcategory 2</a></li>
                        <li><a href="#">Subcategory 3</a></li>
                    </ul>
                </li>
            @endforeach
        </ul>
        <div class="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
