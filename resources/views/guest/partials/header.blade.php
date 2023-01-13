<header>
    <a href="/">
        <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
    </a>
    <nav>
        <ul>
            @foreach ($menu as $item)
            <li>
                <a href="{{ route($item['route']) }}">
                    {{ $item['label'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>
