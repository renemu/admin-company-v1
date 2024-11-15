<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <header id="header" class="header fixed-top d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="index.html" class="logo d-flex align-items-center">
                                        <img src="assets/img/logo.png" alt="" />
                                        <span class="d-none d-lg-block">NiceAdmin</span>
                                    </a>
                                    <i class="bi bi-list toggle-sidebar-btn"></i>
                                </div>
                                <!-- End Logo -->

                                <div class="search-bar">
                                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                                        <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
                                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                                <!-- End Search Bar -->

                                <nav class="header-nav ms-auto">
                                    <ul class="d-flex align-items-center">
                                        <li class="nav-item d-block d-lg-none">
                                            <a class="nav-link nav-icon search-bar-toggle" href="#">
                                                <i class="bi bi-search"></i>
                                            </a>
                                        </li>
                                        <!-- End Search Icon-->

                                        <li class="nav-item dropdown">
                                            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-bell"></i>
                                                <span class="badge bg-primary badge-number">4</span>
                                            </a><!-- End Notification Icon -->

                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                                                <li class="dropdown-header">
                                                    You have 4 new notifications
                                                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View
                                                            all</span></a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li class="notification-item">
                                                    <i class="bi bi-exclamation-circle text-warning"></i>
                                                    <div>
                                                        <h4>Lorem Ipsum</h4>
                                                        <p>Quae dolorem earum veritatis oditseno</p>
                                                        <p>30 min. ago</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li class="notification-item">
                                                    <i class="bi bi-x-circle text-danger"></i>
                                                    <div>
                                                        <h4>Atque rerum nesciunt</h4>
                                                        <p>Quae dolorem earum veritatis oditseno</p>
                                                        <p>1 hr. ago</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li class="notification-item">
                                                    <i class="bi bi-check-circle text-success"></i>
                                                    <div>
                                                        <h4>Sit rerum fuga</h4>
                                                        <p>Quae dolorem earum veritatis oditseno</p>
                                                        <p>2 hrs. ago</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li class="notification-item">
                                                    <i class="bi bi-info-circle text-primary"></i>
                                                    <div>
                                                        <h4>Dicta reprehenderit</h4>
                                                        <p>Quae dolorem earum veritatis oditseno</p>
                                                        <p>4 hrs. ago</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li class="dropdown-footer">
                                                    <a href="#">Show all notifications</a>
                                                </li>
                                            </ul>
                                            <!-- End Notification Dropdown Items -->
                                        </li>
                                        <!-- End Notification Nav -->

                                        <li class="nav-item dropdown">
                                            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-chat-left-text"></i>
                                                <span class="badge bg-success badge-number">3</span>
                                            </a><!-- End Messages Icon -->

                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                                                <li class="dropdown-header">
                                                    You have 3 new messages
                                                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View
                                                            all</span></a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li class="message-item">
                                                    <a href="#">
                                                        <img src="assets/img/messages-1.jpg" alt=""
                                                            class="rounded-circle" />
                                                        <div>
                                                            <h4>Maria Hudson</h4>
                                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia
                                                                est ut...</p>
                                                            <p>4 hrs. ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li class="message-item">
                                                    <a href="#">
                                                        <img src="assets/img/messages-2.jpg" alt=""
                                                            class="rounded-circle" />
                                                        <div>
                                                            <h4>Anna Nelson</h4>
                                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia
                                                                est ut...</p>
                                                            <p>6 hrs. ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li class="message-item">
                                                    <a href="#">
                                                        <img src="assets/img/messages-3.jpg" alt=""
                                                            class="rounded-circle" />
                                                        <div>
                                                            <h4>David Muldon</h4>
                                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia
                                                                est ut...</p>
                                                            <p>8 hrs. ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li class="dropdown-footer">
                                                    <a href="#">Show all messages</a>
                                                </li>
                                            </ul>
                                            <!-- End Messages Dropdown Items -->
                                        </li>
                                        <!-- End Messages Nav -->

                                        <li class="nav-item dropdown pe-3">
                                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                                                data-bs-toggle="dropdown">
                                                <img src="assets/img/profile-img.jpg" alt="Profile"
                                                    class="rounded-circle" />
                                                <span
                                                    class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                                            </a><!-- End Profile Iamge Icon -->

                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                                <li class="dropdown-header">
                                                    <h6>{{ Auth::user()->name }}</h6>
                                                    <span>Web Designer</span>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="users-profile.html">
                                                        <i class="bi bi-person"></i>
                                                        <span>My Profile</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="users-profile.html">
                                                        <i class="bi bi-gear"></i>
                                                        <span>Account Settings</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="pages-faq.html">
                                                        <i class="bi bi-question-circle"></i>
                                                        <span>Need Help?</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>

                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class="bi bi-box-arrow-right"></i>
                                                        <span>Sign Out</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- End Profile Dropdown Items -->
                                        </li>
                                        <!-- End Profile Nav -->
                                    </ul>
                                </nav>
                                <!-- End Icons Navigation -->
                            </header>
                            <!-- <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li> -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="assets/vendor/php-email-form/validate.js"></script>
</body>

</html>