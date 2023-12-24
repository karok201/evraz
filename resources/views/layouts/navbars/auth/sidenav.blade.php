<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}"
            target="_blank">
            <img src="/img/logos/evraz.svg" alt="Evraz" height="35">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3 d-flex align-items-center">
                <h4 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Основные страницы</h4>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Главная</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'operations' ? 'active' : '' }}" href="{{ route('operations') }}">
                    <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Операции</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'analytics' ? 'active' : '' }}" href="{{ route('analytics') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-spaceship text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Аналитика</span>
                </a>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <h4 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Дополнительно</h4>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Профиль</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
