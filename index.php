<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAPON BAPENDA</title>
    <meta name="description" content="SIAPON streamlines online tax management with dynamic dashboards, integrated filing, and verification for Sarmi's taxpayers.">
    <meta name="keywords" content="pajak online, sarmi, bapenda, e-sptpd, npwpd, nopd, verifikasi pajak, pembayaran pajak, sistem informasi pajak">
    <meta property="og:title" content="SIAPON BAPENDA">
    <meta property="og:description" content="SIAPON streamlines online tax management with dynamic dashboards, integrated filing, and verification for Sarmi's taxpayers.">
    <meta property="og:image" content="https://project-screens.s3.amazonaws.com/screenshots/34706/app-hero-20251006-013730.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://project-screens.s3.amazonaws.com/screenshots/34706/app-hero-20251006-013730.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">SIAPON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <button class="btn btn-primary ms-lg-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="hero">
        <div class="container">
            <h1 class="display-4 fw-bold">Sistem Informasi Pembukuan Pajak Online</h1>
            <p class="lead my-4">Modernisasi layanan perpajakan Badan Pendapatan Daerah Kabupaten Sarmi.</p>
            <a href="#features" class="btn btn-light btn-lg">Learn More</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://picsum.photos/seed/siapon-about/800/600" alt="Badan Pendapatan Daerah Kabupaten Sarmi" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <h2>About SIAPON</h2>
                    <p>SIAPON adalah platform digital yang dirancang untuk merevolusi cara wajib pajak di Kabupaten Sarmi berinteraksi dengan Badan Pendapatan Daerah. Kami menyediakan sistem yang terintegrasi, efisien, dan transparan untuk semua kebutuhan perpajakan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Key Features</h2>
                <p class="lead">Everything you need in one integrated platform.</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-4 text-center h-100">
                        <i class="bi bi-file-earmark-text-fill fs-1 text-primary"></i>
                        <h4 class="mt-3">E-SPTPD</h4>
                        <p>Pelaporan SPTPD secara online yang cepat, mudah, dan dapat diakses kapan saja.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 text-center h-100">
                        <i class="bi bi-person-plus-fill fs-1 text-primary"></i>
                        <h4 class="mt-3">Registrasi Online</h4>
                        <p>Pendaftaran NPWPD & NOPD baru tanpa harus datang ke kantor pelayanan.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 text-center h-100">
                        <i class="bi bi-cash-coin fs-1 text-primary"></i>
                        <h4 class="mt-3">Pembayaran Terintegrasi</h4>
                        <p>Sistem pembayaran yang aman dan terhubung dengan berbagai kanal pembayaran.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2>Contact Us</h2>
                    <p class="lead mb-5">Have questions? We'd love to hear from you.</p>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            <p>&copy; 2025 BAPENDA Kabupaten Sarmi. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Admin Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" value="admin" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" value="pwd123" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" disabled>Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>