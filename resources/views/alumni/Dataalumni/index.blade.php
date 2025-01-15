<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/dataalumni.css') }}">
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
                <button onclick="window.location='{{ route('login') }}';" class="dropdown-icon">
                    <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/logout.png') }}" alt="Logout Icon">
                    </button>
                </form>

            </ul>
        </div>
    </nav>
    {{-- <form action="{{ route('alumni.Dataalumni.index') }}" method="GET" class="form-inline mb-3">
        <div class="form-group">
            <label for="tahun_lulus">Tahun Lulus:</label>
            <select name="tahun_lulus" id="tahun_lulus" class="form-control mx-2">
                <option value="">Semua</option>
                @foreach ($listTahunLulus as $tahun)
                    <option value="{{ $tahun->tahun_lulus }}"
                        {{ request('tahun_lulus') == $tahun->tahun_lulus ? 'selected' : '' }}>
                        {{ $tahun->tahun_lulus }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="konsentrasi_keahlian">Konsentrasi Keahlian:</label>
            <select name="konsentrasi_keahlian" id="konsentrasi_keahlian" class="form-control mx-2">
                <option value="">Semua</option>
                @foreach ($listKonsentrasiKeahlian as $konsentrasi)
                    <option value="{{ $konsentrasi->konsentrasi_keahlian }}"
                        {{ request('konsentrasi_keahlian') == $konsentrasi->konsentrasi_keahlian ? 'selected' : '' }}>
                        {{ $konsentrasi->konsentrasi_keahlian }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status_alumni">Status Alumni:</label>
            <select name="status_alumni" id="status_alumni" class="form-control mx-2">
                <option value="">Semua</option>
                @foreach ($listStatusAlumni as $status)
                    <option value="{{ $status->status }}"
                        {{ request('status_alumni') == $status->status ? 'selected' : '' }}>
                        {{ $status->status }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary ml-2">Cari</button>
    </form> --}}

    <div class="container">
        <h1 class="mt-4">Daftar Alumni</h1>


        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NISN</th>
                    <th>NIK</th>
                    <th>Tahun Lulus</th>
                    <th>Status Alumni</th>
                    <th>Jenis Kelamin</th>
                    <th>KonsentrasiKeahlian</th>
                    {{-- <th>Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($alumni as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama_depan }} {{ $item->nama_belakang }}</td>
                        <td>{{ $item->nisn }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->tahunlulus->tahun_lulus ?? '-' }}</td> <!-- Relasi ke tbl_tahun_lulus -->
                        <td>{{ $item->statusAlumni->status ?? '-' }}</td> <!-- Relasi ke tbl_status_alumni -->
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->konsentrasiKeahlian->konsentrasi_keahlian ?? '-' }}</td>
                        {{-- <td>
                            <a href="{{ route('Dataalumni.show', $item->id_alumni) }}"
                                class="btn btn-primary">Detail</a>
                        </td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">Tidak ada data alumni</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
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
