<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#2196f3">
    <meta name="author" content="DexignZone" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="circlan" />
    <meta property="og:title" content="circlan" />
    <meta property="og:description" content="circlan" />
    <meta property="og:image" content="https://soziety.dexignzone.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/ico.png" />

    <!-- Title -->
    <title>circlan</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>
</head>

<body class="bg-white">
    <div class="page-wraper header-fixed">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->

        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="main-bar">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                        <h4 class="title mb-0">Alfansyah Wardhana</h4>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content">
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Page Content -->
        <div class="page-content">
            <div class="position-relative">
                <nav id="main-navigation">
                    <ul class="links-container">
                        <li class="nav-link active">250 Family Joined</li>
                        <li class="nav-link">4.5K All User</li>
                    </ul>
                </nav>
                <div class="swiper-scrollbar"></div>
            </div>
            <div class="container profile-area pt-0">
                <article id="pages-container">
                    <article id="pages-container-inner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="contant-section style-2">
                                    <div class="title-bar m-0">
                                        <h6 class="mb-0">Friends</h6>
                                        <div class="dz-tab style-2">
                                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                                <li class="nav-item" role="presentation">

                                                </li>
                                                <li class="nav-item" role="presentation">

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="myTab3Content">
                                        <div class="tab-pane fade" id="grid" role="tabpanel" aria-labelledby="grid-tab">

                                        </div>
                                        <div class="tab-pane fade show active" id="list" role="tabpanel"
                                            aria-labelledby="list2-tab">
                                            <div class="dz-user-list row g-3">
                                                @forelse ($users as $user)
                                                <div class="col-12">
                                                    <div class="user-grid style-2">
                                                        <a href="{{ url('user-profile/' . $user->id) }}"
                                                            class="d-flex align-items-center">
                                                            <div class="media status media-50">
                                                                @if($user->photoProfile)
                                                                <img src="{{ asset('storage/' . $user->photoProfile) }}"
                                                                    alt="{{ $user->name }}" />
                                                                @else
                                                                <img src="{{ asset('assets/images/user.png') }}"
                                                                    alt="{{ $user->name }}" />
                                                                @endif
                                                            </div>
                                                            <span class="name">{{ $user->name }}</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="follow-btn">UNFOLLOW</a>
                                                    </div>
                                                </div>
                                                @empty
                                                <p class="text-center">No users found.</p>
                                                @endforelse
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="contant-section style-2">
                                    <div class="title-bar m-0">
                                        <h6 class="mb-0">Friends</h6>
                                        <div class="dz-tab style-2">
                                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                                <li class="nav-item" role="presentation">

                                                </li>
                                                <li class="nav-item" role="presentation">

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="myTabContent4">
                                        <div class="tab-pane fade" id="grid2" role="tabpanel"
                                            aria-labelledby="grid2-tab">
                                        </div>
                                        <div class="tab-pane fade show active" id="list2" role="tabpanel"
                                            aria-labelledby="list2-tab">
                                            <div class="dz-user-list row g-3">
                                                @forelse ($users as $user)
                                                <div class="col-12">
                                                    <div class="user-grid style-2">
                                                        <a href="{{ url('user-profile/' . $user->id) }}"
                                                            class="d-flex align-items-center">
                                                            <div class="media status media-50">
                                                                @if($user->photoProfile)
                                                                <img src="{{ asset('storage/' . $user->photoProfile) }}"
                                                                    alt="{{ $user->name }}" />
                                                                @else
                                                                <img src="{{ asset('assets/images/user.png') }}"
                                                                    alt="{{ $user->name }}" />
                                                                @endif

                                                            </div>
                                                            <span class="name">{{ $user->name }}</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="follow-btn">UNFOLLOW</a>
                                                    </div>
                                                </div>
                                                @empty
                                                <p class="text-center">No users found.</p>
                                                @endforelse
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </article>
            </div>
        </div>
        <!-- Page Content End-->
    </div>
    <!--**********************************
    Scripts
***********************************-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
    <script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
    // === SETUP ===
    // create the swiper instance
    var pagesContainer = new Swiper('#pages-container-inner', {
        slidesPerView: 1,
        watchSlidesProgress: true,

        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
    });

    $('.links-container > .nav-link').on('click', function() {
        $(this).addClass('active');
        pagesContainer.slideTo($('.nav-link').index($(this)));
    });
    </script>

</html>