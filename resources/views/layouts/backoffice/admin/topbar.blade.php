<header class="header--dashboard">
                <div class="header__left">
                    <h3>@yield('page_title')</h3>
                    <p>Everything here</p>
                </div>
                <div class="header__center">
                    <form class="ps-form--search-bar" action="index.html" method="get">
                        <input class="form-control" type="text" placeholder="Search something">
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="header__right"><a class="header__site-link" target="_blank" href="{{ route('homepage')}}"><span>View your store</span><i class="icon-exit-right"></i></a></div>
            </header>