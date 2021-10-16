<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Volt CSS -->
    <link rel="stylesheet" href="/css/volt.css">

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/34b1e2b6df.js" crossorigin="anonymous"></script>

    <!-- include jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond CSS -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <!-- JS -->
    <script src="/js/style.js" defer></script>

    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="../index.html">
            <img class="navbar-brand-dark" src="../assets/img/brand/light.svg" alt="Volt logo">
            <img class="navbar-brand-light" src="../assets/img/brand/dark.svg" alt="Volt logo">
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse simplebar-scrollable-y" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <div class="sidebar-inner px-4 pt-3">
                                <div class="user-card d-flex d-md-none justify-content-between justify-content-md-center pb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-lg me-4"><img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
                                        <div class="d-block">
                                            <h2 class="h5 mb-3">Hi, Jane</h2><a href="../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center"><svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                </svg> Sign Out</a>
                                        </div>
                                    </div>
                                    <div class="collapse-close d-md-none"><a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <ul class="nav flex-column pt-3 pt-md-0">

                                    <li class="nav-item">
                                        <div class="nav-link d-flex align-items-center">
                                            <span class="sidebar-icon">
                                            </span>
                                            <span class="mt-1 sidebar-text">Bic Pema</span>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('posts.index') }}" class="nav-link">
                                            <span class="sidebar-icon">
                                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                                </svg>
                                            </span>
                                            <span class="sidebar-text">ホーム</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('submit.index') }}" class="nav-link">
                                            <span class="sidebar-icon">
                                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <span class="sidebar-text">投稿する</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            <span class="sidebar-icon">
                                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <span class="sidebar-text">マイページ</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main class="content">
        <div class="row py-2">
            <div class="col">
                <button id="sidebar-toggle" class="sidebar-toggle me-3 btn btn-icon-only d-none d-lg-inline-block align-items-center justify-content-center">
                    <svg class="toggle-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="col">
                <div class="dropdown d-flex align-items-center justify-content-end h-100 pe-4">
                    @auth
                    <a class="dropdown-toggle font-small fw-bold text-gray-900" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                ログアウト
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    @else
                    <a class="dropdown-toggle font-small fw-bold text-gray-900" data-bs-toggle="dropdown" aria-expanded="false">
                        ゲスト
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('register') }}">新規登録</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">ログイン</a>
                        </li>
                    </ul>
                    @endauth
                </div>
            </div>
        </div>
        {{-- フラッシュメッセージ --}}
        @if(session('flash_message'))
        <div class="">
            <div class="alert alert-info" role="alert">
                {{ session('flash_message') }}
            </div>
        </div>
        @endif
        @yield('content')
    </main>
</body>

</html>