<header class="flex-row-center">
    <div class="container flex-row-center">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
            </a>
        </div>
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
    </div>
    <div class="container flex-row-center">
        <div class="header-search flex-row-center">
            <button class="flex-row-center">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <div class="header-login">
            <button>SIGN UP</button>
            <button>LOG IN</button>
        </div>
    </div>

</header>
