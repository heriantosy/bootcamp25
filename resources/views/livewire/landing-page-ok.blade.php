<div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-code-slash me-1"></i> KlinikCoding
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Mentor</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Kelas</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary rounded-pill px-4" href="#">
                            Masuk Portal
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="pt-5 mt-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="badge bg-primary-subtle text-primary mb-3">
                        PORTAL APLIKASI KLINIK CODING
                    </span>
                    <h1 class="fw-bold display-5 mt-3">
                        Solusi <span class="text-primary">Bimbingan Coding</span><br>
                        untuk Mahasiswa & Profesional
                    </h1>
                    <p class="text-muted fs-5 mt-3">
                        Klinik Coding adalah portal pembelajaran dan konsultasi
                        pemrograman berbasis praktik, mentor berpengalaman,
                        dan studi kasus nyata.
                    </p>

                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="btn btn-primary btn-lg rounded-pill px-4">
                            Mulai Konsultasi
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-lg rounded-pill px-4">
                            Lihat Program
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/gbr1.jpg') }}"
                         class="img-fluid"
                         alt="Klinik Coding">
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Layanan Kami</h2>
                <p class="text-muted">
                    Pendampingan coding dari nol hingga mahir
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4">
                        <i class="bi bi-laptop fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">Konsultasi Coding</h5>
                        <p class="text-muted">
                            Bantuan debugging, logika program, dan penyusunan project.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4">
                        <i class="bi bi-people fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">Mentoring Intensif</h5>
                        <p class="text-muted">
                            Belajar langsung dengan mentor industri & akademisi.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4">
                        <i class="bi bi-award fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">Bootcamp & Sertifikasi</h5>
                        <p class="text-muted">
                            Program intensif berbasis studi kasus dan project nyata.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">
                        Kenapa Memilih Klinik Coding?
                    </h2>
                    <ul class="list-unstyled fs-5">
                        <li class="mb-3">
                            <i class="bi bi-check-circle me-2"></i>
                            Pendekatan praktik & studi kasus nyata
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle me-2"></i>
                            Mentor berpengalaman industri & kampus
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle me-2"></i>
                            Portal modern, progres belajar terpantau
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 text-center">
                    <img src="{{ asset('template/images/dashboard.png') }}"
                         class="img-fluid rounded shadow"
                         alt="Dashboard Portal">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">
            <small>
                © {{ date('Y') }} Klinik Coding · Universitas Hang Tuah Pekanbaru
            </small>
        </div>
    </footer>

</div>
