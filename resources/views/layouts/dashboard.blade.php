<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }} - Dashboard</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
            crossorigin="anonymous"
        />
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito"
            rel="stylesheet"
        />

        <!-- Styles -->
        <link href="/css/dashboard.css" rel="stylesheet" />
    </head>

    <body>
        <div class="container">
            <!-- SIDEBAR -->
            <aside>
                <div class="top">
                    <div class="logo">
                        <img src="/img/cek.png" alt="" />
                        <h2>ITFEST <span class="danger">2022</span></h2>
                    </div>
                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp">close</span>
                    </div>
                </div>
                <div class="sidebar">
                    <a
                        href="/dashboard"
                        class="{{ Request::is('dashboard') ? 'active' : '' }}"
                    >
                        <span class="material-icons-outlined">grid_view</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a
                        href="/dashboard/profile"
                        class="{{ Request::is('dashboard/profile') ? 'active' : '' }}"
                    >
                        <span class="material-icons-sharp">person_outline</span>
                        <h3>Profile</h3>
                    </a>
                    <a
                        href="/dashboard/competitions"
                        class="{{ Request::is('dashboard/competitions') ? 'active' : '' }}"
                    >
                        <span class="material-icons-outlined"
                            >emoji_events</span
                        >
                        <h3>Competitions</h3>
                    </a>
                    <a
                        class="sidebar-logout"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                    >
                        ><span class="material-icons-sharp">logout</span>
                        <h3>{{ __("Logout") }}</h3></a
                    >
                    <form
                        id="logout-form"
                        action="{{ route('logout') }}"
                        method="POST"
                        class="d-none"
                    >
                        @csrf
                    </form>
                </div>
            </aside>
            <!-- END OF SIDEBAR -->
            <!-- MAIN -->
            <main>@yield('content')</main>
            <!-- END OF MAIN -->
            <!-- NOTIFICATION -->
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-icons-sharp">menu</span>
                    </button>
                    <div class="profile">
                        <div class="info">
                            <p>
                                Hey, <b>{{ Auth::user()->name }}</b>
                            </p>
                            <small
                                class="text-muted"
                                >{{ Auth::user()->isAdmin == 1 ? 'admin' : '' }}</small
                            >
                        </div>
                        <div class="profile-photo">
                            <img src="/img/cek.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF NOTIFICATION -->
        </div>
    </body>
    <script>
        const sideMenu = document.querySelector("aside");
        const menuBtn = document.querySelector("#menu-btn");
        const closeBtn = document.querySelector("#close-btn");

        menuBtn.addEventListener("click", () => {
            sideMenu.style.display = "block";
        });

        closeBtn.addEventListener("click", () => {
            sideMenu.style.display = "none";
        });
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"
    ></script>
</html>
