<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GastroCheck - Pantau Kesehatan Lambung Anda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/index.css">
    <style>
        
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <i class="fas fa-stomach"></i>
                    <span>GastroCheck</span>
                </div>
                <div class="nav-links">
                    <a href="#home">Beranda</a>
                    <a href="#features">Fitur</a>
                    <a href="#how-it-works">Cara Kerja</a>
                    <a href="diagnosa.php">Diagnosa</a>
                </div>
                <div class="auth-buttons">
                    <a href="diagnosa.php" class="btn btn-primary">Mulai Diagnosa</a>
                </div>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Pantau Kesehatan <span>Lambung</span> Anda dengan Mudah</h1>
                <p>GastroCheck membantu Anda mendeteksi dini masalah lambung melalui analisis gejala yang Anda alami. Dapatkan rekomendasi tindakan yang tepat untuk kesehatan pencernaan Anda.</p>
                <div class="hero-buttons">
                    <a href="diagnosa.php" class="btn btn-primary">Mulai Diagnosa Sekarang</a>
                    <a href="#features" class="btn btn-outline">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Fitur Unggulan GastroCheck</h2>
                <p>Nikmati berbagai fitur canggih yang dirancang khusus untuk membantu Anda menjaga kesehatan lambung</p>
            </div>
            <<div class="features-grid">
    <div class="features-grid">
    <div class="feature-card">
        <div class="feature-icon">
            <i class="fas fa-search"></i>
        </div>
        <h3>Deteksi Dini</h3>
        <p>Identifikasi potensi masalah lambung berdasarkan gejala yang Anda rasakan dengan sistem pakar forward chaining.</p>
    </div>
    
    <div class="feature-card btn-card" onclick="window.location.href='analisis.php'">
        <a href="analisis.php" class="feature-link"></a>
        <div class="feature-content">
            <div class="feature-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <h3>Analisis Mendalam</h3>
            <p>Dapatkan analisis komprehensif tentang kondisi lambung Anda dengan data statistik dan penelitian terkini.</p>
            <div class="click-indicator">
                <i class="fas fa-arrow-right"></i>
            </div>
        </div>
    </div>
    
    <div class="feature-card btn-card" onclick="window.location.href='makanan.php'">
        <a href="makanan.php" class="feature-link"></a>
        <div class="feature-content">
            <div class="feature-icon">
                <i class="fas fa-utensils"></i>
            </div>
            <h3>Rekomendasi Makanan</h3>
            <p>Dapatkan saran makanan yang sesuai dengan kondisi lambung Anda untuk mempercepat pemulihan.</p>
            <div class="click-indicator">
                <i class="fas fa-arrow-right"></i>
            </div>
        </div>
    </div>
    
    <div class="feature-card btn-card" onclick="window.location.href='medis.php'">
        <a href="medis.php" class="feature-link"></a>
        <div class="feature-content">
            <div class="feature-icon">
                <i class="fas fa-user-md"></i>
            </div>
            <h3>Informasi Medis</h3>
            <p>Akses informasi lengkap tentang berbagai penyakit lambung dan penanganannya.</p>
            <div class="click-indicator">
                <i class="fas fa-arrow-right"></i>
            </div>
        </div>
    </div>
</div>
            
            <!-- Additional CTA for Analysis -->
           <!-- <div style="text-align: center; margin-top: 3rem;">
                <div style="background: linear-gradient(135deg, #667eea, #764ba2); padding: 2rem; border-radius: 15px; color: white;">
                    <h3 style="margin-bottom: 1rem;">Ingin Analisis Lebih Mendalam?</h3>
                    <p style="margin-bottom: 1.5rem; opacity: 0.9;">Jelajahi data statistik, faktor risiko, dan panduan komprehensif untuk kesehatan lambung optimal</p>
                    <a href="analisis.php" class="btn" style="background: white; color: #667eea; text-decoration: none; padding: 12px 30px; border-radius: 25px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">
                        <i class="fas fa-chart-bar"></i> Buka Analisis Mendalam
                    </a>
                </div>
            </div> -->
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <div class="section-title">
                <h2>Bagaimana GastroCheck Bekerja?</h2>
                <p>Hanya dengan 3 langkah mudah, Anda dapat mengetahui kondisi kesehatan lambung Anda</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Pilih Gejala</h3>
                    <p>Centang gejala yang sesuai dengan kondisi yang Anda alami</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Analisis Otomatis</h3>
                    <p>Sistem akan menganalisis gejala menggunakan metode forward chaining</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Dapatkan Hasil</h3>
                    <p>Terima diagnosa awal dan rekomendasi penanganan berdasarkan gejala Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Pengguna Kami?</h2>
                <p>Ribuan pengguna telah merasakan manfaat GastroCheck untuk kesehatan lambung mereka</p>
            </div>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Sangat membantu! Saya bisa mendeteksi gejala maag lebih dini dan mengambil tindakan yang tepat."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">AS</div>
                        <div class="author-info">
                            <h4>Ahmad Surya</h4>
                            <p>Pengguna sejak 2023</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Sistem diagnosanya mudah digunakan dan hasilnya informatif. Sangat direkomendasikan!"
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">DM</div>
                        <div class="author-info">
                            <h4>Dewi Maulana</h4>
                            <p>Pengguna sejak 2023</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Informasi tentang pencegahan dan penanganannya sangat berguna untuk kehidupan sehari-hari."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">RS</div>
                        <div class="author-info">
                            <h4>Rina Sari</h4>
                            <p>Pengguna sejak 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Siap Menjaga Kesehatan Lambung Anda?</h2>
            <p>Gunakan GastroCheck sekarang untuk mendapatkan analisis kondisi lambung Anda</p>
            <div class="cta-buttons">
                <a href="diagnosa.php" class="btn btn-light">Mulai Diagnosa Sekarang</a>
                <a href="analisis.php" class="btn btn-transparent">Lihat Analisis</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>GastroCheck</h3>
                    <p>Aplikasi kesehatan yang membantu Anda memantau dan menjaga kesehatan lambung dengan mudah dan efektif.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Tautan Cepat</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#features">Fitur</a></li>
                        <li><a href="#how-it-works">Cara Kerja</a></li>
                        <li><a href="diagnosa.php">Diagnosa</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Informasi</h3>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Bantuan</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Kontak</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-envelope"></i> info@gastrocheck.com</li>
                        <li><i class="fas fa-phone"></i> +62 813 9215 8503</li>
                        <li><i class="fas fa-map-marker-alt"></i> Pekalongan, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 GastroCheck. All rights reserved. | Sistem Pakar Diagnosa Penyakit Lambung Menggunakan Metode Forward Chaining</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            const authButtons = document.querySelector('.auth-buttons');
            
            if (navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
                authButtons.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
                authButtons.style.display = 'flex';
                navLinks.style.flexDirection = 'column';
                authButtons.style.flexDirection = 'column';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '80px';
                navLinks.style.left = '0';
                navLinks.style.right = '0';
                navLinks.style.backgroundColor = 'white';
                navLinks.style.padding = '20px';
                navLinks.style.gap = '15px';
                navLinks.style.boxShadow = '0 5px 10px rgba(0,0,0,0.1)';
                
                authButtons.style.position = 'absolute';
                authButtons.style.top = '200px';
                authButtons.style.left = '0';
                authButtons.style.right = '0';
                authButtons.style.backgroundColor = 'white';
                authButtons.style.padding = '20px';
                authButtons.style.gap = '15px';
                authButtons.style.boxShadow = '0 5px 10px rgba(0,0,0,0.1)';
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add click effects to button cards
        document.querySelectorAll('.feature-card.btn-card').forEach(card => {
            card.addEventListener('click', function() {
                // Add click animation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
            
            // Add keyboard navigation
            card.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    window.location.href = 'analisis.php';
                }
            });
        });

        // Make button cards focusable
        document.querySelectorAll('.feature-card.btn-card').forEach(card => {
            card.setAttribute('tabindex', '0');
            card.setAttribute('role', 'button');
            card.setAttribute('aria-label', 'Buka halaman analisis mendalam');
        });
    </script>
</body>
</html>