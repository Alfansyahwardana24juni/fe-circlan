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
    <meta name="description" content="Circlan" />
    <meta property="og:title" content="Circlan" />
    <meta property="og:description" content="Circlan" />
    <meta property="og:image" content="https://soziety.dexignzone.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- Title -->
    <title>Circlan</title>

    <!-- Stylesheets -->
    <!-- Stylesheets -->
    <link href="assets/vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
    <link href="assets/vendor/lightgallery/dist/css/lg-thumbnail.css" rel="stylesheet">
    <link href="assets/vendor/lightgallery/dist/css/lg-zoom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>
</head>

<body class="bg-gradient-2">
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
                        <h4 class="title mb-0">{{ $user->name ?? 'Belum diisi' }}</h4>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content">
                        <a href="setting.html" class="bell-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="inherit"
                                xmlns:v="https://vecta.io/nano">
                                <path
                                    d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46a.5.5 0 0 0-.44-.25c-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65a7.93 7.93 0 0 0-.07.98 7.93 7.93 0 0 0 .07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46a.5.5 0 0 0 .44.25c.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73s-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13L6.5 12c0-.2.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8a4 4 0 1 0 0 8 4 4 0 1 0 0-8zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Page Content -->
        <div class="page-content">
            <div class="container profile-area">
                <div class="profile">
                    <div class="main-profile">
                        <div class="left-content">
                            <!-- Jenis Kelamin -->
                            <h6 class="text-primary font-w400">Jenis Kelamin : {{ $user->gender ?? 'Belum diisi' }}</h6>

                            <!-- Pekerjaan -->
                            <h6 class="text-primary font-w400">Pekerjaan : {{ $user->pekerjaan ?? 'Belum diisi' }}</h6>

                            <!-- Lokasi -->
                            <h6 class="text-primary font-w400">Lokasi : {{ $user->lokasi ?? 'Belum diisi' }}</h6>
                        </div>
                        <div class="right-content">
                            <div class="upload-box">
                                @if($user->photoProfile)
                                <img src="{{ asset('storage/' . $user->photoProfile) }}" alt="Profile Photo">
                                @else
                                <img id="photoPreview" src="{{ asset('assets/images/user.png') }}"
                                    alt="Profile Photo Preview" alt="Profile Photo">
                                @endif
                                <a href="{{ route('editprofile.tampil') }}"" class=" upload-btn"><i
                                        class="fa-solid fa-pencil"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="contant-section">
                    <div class="social-bar">
                        <ul>
                            <li class="active">
                                <a href="javascript:void(0);">
                                    <h4>52</h4>
                                    <span>Post</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('social.tampil')}}">
                                    <h4>250</h4>
                                    <span>Family Joined</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('social.tampil')}}">
                                    <h4>4.5k</h4>
                                    <span>All User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="title-bar my-2">
                        <h6 class="mb-0">My Posts</h6>
                        <div class="dz-tab style-2">
                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab3" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane3" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 3H3V10H10V3Z" stroke="var(--primary)" stroke-width="2"
                                                stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21 3H14V10H21V3Z" stroke="var(--primary)" stroke-width="2"
                                                stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21 14H14V21H21V14Z" stroke="var(--primary)" stroke-width="2"
                                                stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 14H3V21H10V14Z" stroke="var(--primary)" stroke-width="2"
                                                stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab3" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane3" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6H21" stroke="var(--primary)" stroke-opacity="0.5"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 12H21" stroke="var(--primary)" stroke-opacity="0.5"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 18H21" stroke="var(--primary)" stroke-opacity="0.5"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 6H3.01" stroke="var(--primary)" stroke-opacity="0.5"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 12H3.01" stroke="var(--primary)" stroke-opacity="0.5"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 18H3.01" stroke="var(--primary)" stroke-opacity="0.5"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </li>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade show active" id="home-tab-pane3" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="dz-lightgallery style-2" id="lightgallery">
                                <a class="gallery-box" href="assets/images/post/pic1.png">
                                    <img src="assets/images/post/pic1.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic2.png">
                                    <img src="assets/images/post/pic2.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic3.png">
                                    <img src="assets/images/post/pic3.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic4.png">
                                    <img src="assets/images/post/pic4.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic5.png">
                                    <img src="assets/images/post/pic5.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic6.png">
                                    <img src="assets/images/post/pic6.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic7.png">
                                    <img src="assets/images/post/pic7.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic8.png">
                                    <img src="assets/images/post/pic8.png" alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane3" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="dz-lightgallery" id="lightgallery-2">
                                <a class="gallery-box" href="assets/images/post/pic4.png">
                                    <img src="assets/images/post/pic4.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic3.png">
                                    <img src="assets/images/post/pic3.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic2.png">
                                    <img src="assets/images/post/pic2.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic1.png">
                                    <img src="assets/images/post/pic1.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic9.png">
                                    <img src="assets/images/post/pic9.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic12.png">
                                    <img src="assets/images/post/pic12.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic5.png">
                                    <img src="assets/images/post/pic5.png" alt="image">
                                </a>
                                <a class="gallery-box" href="assets/images/post/pic6.png">
                                    <img src="assets/images/post/pic6.png" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content End-->

        <!-- Menubar -->
        <div class="menubar-area">
            <div class="toolbar-inner menubar-nav">
                <a href="index.html" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                        xmlns:v="https://vecta.io/nano">
                        <path
                            d="M21.44 11.035a.75.75 0 0 1-.69.465H18.5V19a2.25 2.25 0 0 1-2.25 2.25h-3a.75.75 0 0 1-.75-.75V16a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0-.75.75v4.5a.75.75 0 0 1-.75.75h-3A2.25 2.25 0 0 1 3.5 19v-7.5H1.25a.75.75 0 0 1-.69-.465.75.75 0 0 1 .158-.818l9.75-9.75A.75.75 0 0 1 11 .246a.75.75 0 0 1 .533.222l9.75 9.75a.75.75 0 0 1 .158.818z"
                            fill="#b5b5b5" />
                    </svg>
                </a>
                <a href="timeline.html" class="nav-link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                            stroke="#b5b5b5" stroke-opacity="1" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M21 21L16.65 16.65" stroke="#b5b5b5" stroke-opacity="1" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="create-post.html" class="nav-link add-post">
                    <i class="fa-solid fa-plus"></i>
                </a>
                <a href="chat.html" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#b5b5b5"
                        viewBox="0 0 511.606 511.606" xmlns:v="https://vecta.io/nano">
                        <path
                            d="M436.594 74.943c-99.917-99.917-261.637-99.932-361.568 0-80.348 80.347-95.531 199.817-48.029 294.96L.662 485.742c-3.423 15.056 10.071 28.556 25.133 25.133l115.839-26.335c168.429 84.092 369.846-37.653 369.846-228.812 0-68.29-26.595-132.494-74.886-180.785zM309.143 319.394h-160c-11.598 0-21-9.402-21-21s9.402-21 21-21h160c11.598 0 21 9.402 21 21s-9.402 21-21 21zm53.334-85.333H149.143c-11.598 0-21-9.402-21-21s9.402-21 21-21h213.334c11.598 0 21 9.402 21 21s-9.403 21-21 21z" />
                    </svg>
                </a>
                <a href="profile.html" class="nav-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="21" fill="#b5b5b5"
                        xmlns:v="https://vecta.io/nano">
                        <path
                            d="M8 7.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 1 0 0 7.5zm7.5 9v1.5c-.002.199-.079.39-.217.532C13.61 20.455 8.57 20.5 8 20.5s-5.61-.045-7.282-1.718C.579 18.64.501 18.449.5 18.25v-1.5a7.5 7.5 0 1 1 15 0z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- Menubar -->
    </div>
    <!--**********************************
    Scripts
***********************************-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/lightgallery/dist/lightgallery.umd.js"></script>
    <script src="assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.umd.js"></script>
    <script src="assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/custom.js"></script>

</html>