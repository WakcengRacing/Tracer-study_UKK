<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/alumni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_alumni.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="Username">
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="menu">
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.dashboard') }}';">Home</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.Dataalumni.index') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('tracerstudy.create') }}';">Tracer Study</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.tracerkuliah.create') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.tracerkerja.create') }}';">Tracer Kerja</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('testimoni.create') }}';">Testimoni</button>
            </div>
        </div>
        <div class="menu_dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <form id="logout-form" action="{{ route('alumni.profile.index') }}" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/profile.png') }}" alt="Logout Icon">
                    </button>
                </form>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/logout.png') }}" alt="Logout Icon">
                    </button>
                </form>

            </ul>
        </div>
    </nav>
    <div class="top-content">
        <div class="info">
            <h2>Selamat Datang,Alumni</h2>
            <h3>terimakasih telah bergabung</h3>
            <h3>disistem Tracer Study</h3>
            <h3><span> Mohon Lengkapi Data Diri Anda </span></h3>
            <h3>untuk mendukung pengembangan</h3>
            <h3>Alumni di masa depan</h3>
        </div>
        <div class="info-profil">
            <div class="tabel-profil">
                <div class="profil">
                    <img src="{{ asset('images/profil.png') }}" alt="profil">
                </div>
                <div class="profil-item">
                    <p>Nama : {{ Auth::user()->name }}</p>
                </div>
                <div class="profil-item">
                    <p>Email : {{ Auth::user()->email }}</p>
                </div>
                <div class="profil-item">
                    
                    <p>Jurusan   :  {{Auth::user()->email}} </p>
                    
                    
                </div>
                <div class="profil-item">
                    <p>Tahun lulus :</p>
                </div>
            </div>
        </div>
    </div>
    <div class="chart-info">
        <h3>Diagram Data Alumni</h3>
    </div>
    <div class="chart-section">
        <div class="chart-container">
            <canvas id="tracerChart"></canvas>
        </div>
        <div class="chart-legend">

            <ul id="legendList"></ul>
            <p>Jumlah Alumni: 600</p>
        </div>
    </div>
    <div class="chart-info">
        <h3>Diagram Data Pekerjaan Alumni</h3>
    </div>
    <div class="chart-section">
        <div class="chart-container">
            <canvas id="tracerChart-kerja"></canvas>
        </div>
        <div class="chart-legend">

            <ul id="legendList-kerja"></ul>
            <p>Jumlah Alumni: 600</p>
        </div>
    </div>
    <script src="{{ asset('js/alumni.js') }}"></script>
    <footer class="footer">
        <div class="footer-content">
            <p>Copyright © 2024-2027 Andika. Hak Cipta. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon-1">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>
</body>




</html>
