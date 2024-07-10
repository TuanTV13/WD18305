<header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <h1 class="sitename">PHP3</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/notifies" class="active">Trang chủ</a></li>
                    <li class="dropdown"><a href="#"><span>Tin tức</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            @foreach ($categories as $item)
                                <li><a href="{{ route('notifies.newbycategory', ['id' => $item->id]) }}">{{ $item->name }}</a></li>
                                
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>

    </div>

</header>
