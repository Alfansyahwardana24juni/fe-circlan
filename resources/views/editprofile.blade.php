<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#2196f3">
    <meta name="author" content="DexignZone" />
    <meta name="description" content="Circlan" />
    <meta property="og:title" content="Circlan" />
    <meta property="og:description" content="Circlan" />
    <meta property="og:image" content="https://soziety.dexignzone.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- Title -->
    <title>Edit Profile | Circlan</title>

    <!-- Stylesheets -->
    <link href="assets/vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
    <link href="assets/vendor/lightgallery/dist/css/lg-thumbnail.css" rel="stylesheet">
    <link href="assets/vendor/lightgallery/dist/css/lg-zoom.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="page-wraper header-fixed">

        <!-- Header -->
        <header class="header bg-white">
            <div class="container">
                <div class="main-bar">
                    <div class="left-content">
                        <a href="{{ route('profile.tampil') }}" class="back-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </a>
                        <h4 class="title mb-0">Edit Profile</h4>
                    </div>
                    <div class="mid-content"></div>
                    <form id="editProfileForm" action="{{ route('editprofile.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="right-content">
                            <button type="submit" form="editProfileForm"
                                class="text-dark font-20 border-0 bg-transparent">
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="edit-profile">
                    <!-- Pesan Error Global -->
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <!-- Form Profile -->
                    <div class="profile-image">
                        <div class="media media-100 rounded-circle">
                            <img id="photoPreview"
                                src="{{ $user->photoProfile ? asset('storage/' . $user->photoProfile) : asset('assets/images/user.png') }}"
                                alt="Profile Photo">
                        </div>
                        <div id="profileForm">
                            <input type="file" name="photoProfile" class="btn btn-link" id="photoInput"
                                accept="image/*">
                            @error('photoProfile')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Input Email -->
                    <div class="mb-3 input-group input-mini">
                        <input type="text" name="email" class="form-control" value="{{ old('email', $user->email) }}"
                            placeholder="Email" required>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Input Nama -->
                    <div class="mb-3 input-group input-mini">
                        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}"
                            placeholder="Name" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Username -->
                    <div class="mb-3 input-group input-mini">
                        <input type="text" name="username" class="form-control"
                            value="{{ old('username', $user->username ?? '') }}" placeholder="Username">
                        @error('username')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Gender -->
                    <div class="mb-3 input-group input-mini">
                        <select name="gender" class="form-control">
                            <option value="" disabled {{ is_null($user->gender) ? 'selected' : '' }}>Jenis Kelamin
                            </option>
                            <option value="Male" {{ $user->gender === 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $user->gender === 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Pekerjaan -->
                    <div class="mb-3 input-group input-mini">
                        <input type="text" name="pekerjaan" class="form-control"
                            value="{{ old('pekerjaan', $user->pekerjaan ?? '') }}" placeholder="Pekerjaan">
                        @error('pekerjaan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Lokasi -->
                    <div class="mb-3 input-group input-mini">
                        <input type="text" name="lokasi" class="form-control"
                            value="{{ old('lokasi', $user->lokasi ?? '') }}" placeholder="Lokasi">
                        @error('lokasi')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content End -->


    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/lightgallery/dist/lightgallery.umd.js"></script>
    <script src="assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.umd.js"></script>
    <script src="assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
    document.getElementById('photoInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            // Validasi tipe file
            if (!file.type.startsWith('image/')) {
                alert('Harap unggah file gambar!');
                return;
            }

            // Validasi ukuran file (contoh: 2MB)
            if (file.size > 2 * 1024 * 1024) {
                alert('Ukuran gambar maksimal 2MB!');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('photoPreview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
    document.getElementById('photoInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('photoPreview').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
    document.getElementById('photoInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('photoPreview').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
    </script>

</body>

</html>