<nav class="navbar navbar-expand-md navbar-dark bg-main fixed-top px-4" style="z-index:100">
    <a class="navbar-brand mr-auto mobileNavLogo" href="/">
        <img src="{{ asset('logos/SVG/logo_mini.svg') }}" width="auto" height="67px" style="padding:0;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            onclick="toggleNavLine()"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex flex-row justify-content-between flex-wrap navigation-flex" style="width:100%;">
            <ul class="navbar-nav main-nav-item order-0">
                <li class="nav-item mr-3">
                    <a class="nav-link nav-font m-0 J-vertical-align-middle text-white {{Request::path() === '/' ? 'J-nav-border' : ''}}" href="/">ESILEHT</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link nav-font m-0 J-vertical-align-middle text-white {{strpos(Request::path(), 'pood') === 0 ? 'J-nav-border' : ''}}" href="#">POOD</a>
                </li>
            </ul>
            <ul class="navbar-nav main-nav-item order-1 desktopNavBarLogo">
                <a class="navbar-brand ml-auto my-auto mr-0" href="/">
                    <img src="{{ asset('logos/SVG/logo_mini.svg') }}" width="70px" height="auto" class="p-0">
                </a>
            </ul>
            <div class="navbar-nav main-nav-item order-2">
                <li class="nav-item mr-3">
                    <div class="dropdown nav-link J-vertical-align-middle">
                        <a class="dropdown-toggle text-white nav-font"
                           href="#"
                           role="button"
                           id="dropdownMenuLink"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            EESTI
                        </a>
                        <div class="dropdown-menu bg-main border-0" aria-labelledby="dropdownMenuLink" style="z-index:102">
                            <a class="dropdown-item hover-main text-white bg-lightgray" href="#">EESTI KEEL</a>
                            <a class="dropdown-item hover-main text-white" href="#">INGLISE KEEL</a>
                            <a class="dropdown-item hover-main text-white" href="#">VENE KEEL</a>
                        </div>
                    </div>
                </li>
                @guest
                <li class="nav-item mr-3">
                    <a class="nav-link nav-font mr-4 J-vertical-align-middle text-white {{strpos(Request::path(), 'login') === 0 ? 'J-nav-border' : ''}}" href="/login">LOGI SISSE</a>
                </li>
                @else
                    <li class="nav-item mr-3">
                        <div class="dropdown nav-link J-vertical-align-middle">
                            <a class="dropdown-toggle nav-font text-white"
                               href="#"
                               role="button"
                               id="dropdownAdminLink"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">Tere admin!</a>
                            <div class="dropdown-menu bg-main border-0" aria-labelledby="dropdownAdminLink" style="z-index:102">
                                <a class="dropdown-item hover-main text-white
                                   {{strpos(Request::path(), 'admin/products') === 0 ? 'bg-lightgray' : ''}}"
                                   href="/admin/products">Admin paneel</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item hover-main text-white"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </div>
                    </li>

                @endguest
                <li class="nav-item navBarCart">
                    <a class="nav-link nav-font m-0 p-0 J-vertical-align-middle" href="#">
                        <div style="width:40px; height:45px">
                            <p class="p-0 m-0 text-center text-dark" id="cartItemCounter">0</p>
                            <img class="p-0 cartIcon"
                                 src="{{Request::path() === '/' ? asset('icons/cart_icon_white.svg') :
                                  asset('icons/cart_icon_white.svg')}}" width="40px" height="40px">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="nav-line visible"></div>

