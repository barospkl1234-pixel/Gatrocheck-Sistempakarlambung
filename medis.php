<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Medis - GastroCheck</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/medis.css">
    
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="index.php">
                        <i class="fas fa-stomach logo-icon"></i>
                        <h1>GastroCheck</h1>
                    </a>
                </div>
                <a href="index.php" class="back-button">
                    <i class="fas fa-arrow-left"></i> Kembali ke Beranda
                </a>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1><i class="fas fa-user-md"></i> Informasi Medis Lengkap</h1>
            <p>Panduan komprehensif tentang penyakit lambung, gejala, dan penanganannya</p>
        </div>
    </section>

    <!-- Diseases Section -->
    <section class="diseases-section">
        <div class="container">
            <div class="section-title">
                <h2>Jenis Penyakit Lambung</h2>
                <p>Kenali berbagai kondisi lambung dan karakteristiknya</p>
            </div>
            
            <div class="disease-filter">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="common">Umum</button>
                <button class="filter-btn" data-filter="chronic">Kronis</button>
                <button class="filter-btn" data-filter="serious">Serius</button>
            </div>
            
            <div class="diseases-grid">
                <!-- GERD -->
                <div class="disease-card" data-category="common chronic">
                    <div class="disease-header gerd">
                        <div class="disease-icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h3>GERD</h3>
                        <p>Gastroesophageal Reflux Disease</p>
                    </div>
                    <div class="disease-body">
                        <div class="disease-info">
                            <div class="info-item">
                                <span class="info-label">Tingkat Keparahan:</span>
                                <span class="info-value">Ringan - Sedang</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Prevalensi:</span>
                                <span class="info-value">20-30%</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Penanganan:</span>
                                <span class="info-value">Medis & Gaya Hidup</span>
                            </div>
                        </div>
                        <h4>Gejala Utama:</h4>
                        <ul class="symptoms-list">
                            <li>Heartburn (rasa panas di dada)</li>
                            <li>Regurgitasi asam</li>
                            <li>Kesulitan menelan</li>
                            <li>Nyeri ulu hati</li>
                            <li>Batuk kronis</li>
                        </ul>
                    </div>
                </div>

                <!-- Gastritis -->
                <div class="disease-card" data-category="common">
                    <div class="disease-header gastritis">
                        <div class="disease-icon">
                            <i class="fas fa-band-aid"></i>
                        </div>
                        <h3>Gastritis</h3>
                        <p>Peradangan Lapisan Lambung</p>
                    </div>
                    <div class="disease-body">
                        <div class="disease-info">
                            <div class="info-item">
                                <span class="info-label">Tingkat Keparahan:</span>
                                <span class="info-value">Ringan - Berat</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Prevalensi:</span>
                                <span class="info-value">15-25%</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Penanganan:</span>
                                <span class="info-value">Medis & Diet</span>
                            </div>
                        </div>
                        <h4>Gejala Utama:</h4>
                        <ul class="symptoms-list">
                            <li>Nyeri perut bagian atas</li>
                            <li>Mual dan muntah</li>
                            <li>Perut kembung</li>
                            <li>Sendawa berlebihan</li>
                            <li>Kehilangan nafsu makan</li>
                        </ul>
                    </div>
                </div>

                <!-- Tukak Lambung -->
                <div class="disease-card" data-category="chronic">
                    <div class="disease-header ulcer">
                        <div class="disease-icon">
                            <i class="fas fa-first-aid"></i>
                        </div>
                        <h3>Tukak Lambung</h3>
                        <p>Luka pada Lapisan Lambung</p>
                    </div>
                    <div class="disease-body">
                        <div class="disease-info">
                            <div class="info-item">
                                <span class="info-label">Tingkat Keparahan:</span>
                                <span class="info-value">Sedang - Berat</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Prevalensi:</span>
                                <span class="info-value">5-10%</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Penanganan:</span>
                                <span class="info-value">Medis & Operasi</span>
                            </div>
                        </div>
                        <h4>Gejala Utama:</h4>
                        <ul class="symptoms-list">
                            <li>Nyeri perut terbakar</li>
                            <li>Muntah darah</li>
                            <li>BAB berwarna hitam</li>
                            <li>Penurunan berat badan</li>
                            <li>Mual dan muntah</li>
                        </ul>
                    </div>
                </div>

                <!-- Gastroparesis -->
                <div class="disease-card" data-category="chronic serious">
                    <div class="disease-header gastroparesis">
                        <div class="disease-icon">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <h3>Gastroparesis</h3>
                        <p>Kelumpuhan Lambung Parsial</p>
                    </div>
                    <div class="disease-body">
                        <div class="disease-info">
                            <div class="info-item">
                                <span class="info-label">Tingkat Keparahan:</span>
                                <span class="info-value">Berat</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Prevalensi:</span>
                                <span class="info-value">2-5%</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Penanganan:</span>
                                <span class="info-value">Komprehensif</span>
                            </div>
                        </div>
                        <h4>Gejala Utama:</h4>
                        <ul class="symptoms-list">
                            <li>Mual dan muntah</li>
                            <li>Perut kembung</li>
                            <li>Nyeri perut</li>
                            <li>Gula darah tidak stabil</li>
                            <li>Kekurangan gizi</li>
                        </ul>
                    </div>
                </div>

                <!-- Kanker Lambung -->
                <div class="disease-card" data-category="serious">
                    <div class="disease-header cancer">
                        <div class="disease-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h3>Kanker Lambung</h3>
                        <p>Pertumbuhan Sel Abnormal</p>
                    </div>
                    <div class="disease-body">
                        <div class="disease-info">
                            <div class="info-item">
                                <span class="info-label">Tingkat Keparahan:</span>
                                <span class="info-value">Sangat Berat</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Prevalensi:</span>
                                <span class="info-value">1-2%</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Penanganan:</span>
                                <span class="info-value">Operasi & Kemoterapi</span>
                            </div>
                        </div>
                        <h4>Gejala Utama:</h4>
                        <ul class="symptoms-list">
                            <li>Penurunan berat badan drastis</li>
                            <li>Nyeri perut persisten</li>
                            <li>Muntah darah</li>
                            <li>Kesulitan menelan</li>
                            <li>Perut kembung terus-menerus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment Section -->
    <section class="treatment-section">
        <div class="container">
            <div class="section-title">
                <h2>Metode Penanganan</h2>
                <p>Berbagai pendekatan pengobatan untuk kondisi lambung</p>
            </div>
            
            <div class="treatment-tabs">
                <button class="tab-btn active" data-tab="medication">Obat-obatan</button>
                <button class="tab-btn" data-tab="lifestyle">Gaya Hidup</button>
                <button class="tab-btn" data-tab="surgery">Tindakan Medis</button>
                <button class="tab-btn" data-tab="alternative">Pengobatan Alternatif</button>
            </div>
            
            <div class="tab-content active" id="medication">
                <h3>Terapi Obat-obatan</h3>
                <p>Penggunaan obat untuk mengontrol gejala dan mengobati penyebab penyakit lambung.</p>
                
                <div class="treatment-grid">
                    <div class="treatment-card">
                        <div class="treatment-icon">
                            <i class="fas fa-capsules"></i>
                        </div>
                        <h4>Antasida</h4>
                        <p>Menetralkan asam lambung dengan cepat</p>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h4>PPI</h4>
                        <p>Penghambat pompa proton untuk mengurangi produksi asam</p>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h4>Antibiotik</h4>
                        <p>Mengobati infeksi H. pylori</p>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon">
                            <i class="fas fa-prescription"></i>
                        </div>
                        <h4>Prokinetik</h4>
                        <p>Memperbaiki pergerakan lambung</p>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="lifestyle">
                <h3>Perubahan Gaya Hidup</h3>
                <p>Modifikasi pola hidup untuk mengelola dan mencegah masalah lambung.</p>
                
                <div class="treatment-grid">
                    <div class="treatment-card">
                        <div class="treatment-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4>Diet Sehat</h4>
                        <p>Pola makan teratur dan seimbang</p>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon">
                            <i class="fas fa-weight"></i>
                        </div>
                        <h4>Kontrol Berat Badan</h4>
                        <p>Menjaga BMI ideal</p>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon">
                            <i class="fas fa-running"></i>
                        </div>
                        <h4>Olahraga Teratur</h4>
                        <p>Aktivitas fisik moderat</p>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <h4>Manajemen Stres</h4>
                        <p>Teknik relaksasi dan tidur cukup</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prevention Section -->
    <section class="prevention-section">
        <div class="container">
            <div class="section-title">
                <h2>Pencegahan Penyakit Lambung</h2>
                <p>Langkah-langkah untuk menjaga kesehatan lambung</p>
            </div>
            
            <div class="prevention-steps">
                <div class="prevention-card">
                    <div class="step-number">1</div>
                    <h3>Hindari Pemicu</h3>
                    <p>Kenali dan hindari makanan serta minuman yang memicu gejala lambung</p>
                </div>
                <div class="prevention-card">
                    <div class="step-number">2</div>
                    <h3>Makan Teratur</h3>
                    <p>Jadwal makan yang konsisten dengan porsi kecil namun sering</p>
                </div>
                <div class="prevention-card">
                    <div class="step-number">3</div>
                    <h3>Hidrasi Cukup</h3>
                    <p>Minum air putih minimal 2 liter per hari</p>
                </div>
                <div class="prevention-card">
                    <div class="step-number">4</div>
                    <h3>Kelola Stres</h3>
                    <p>Teknik relaksasi dan manajemen stres untuk kesehatan mental</p>
                </div>
                <div class="prevention-card">
                    <div class="step-number">5</div>
                    <h3>Pemeriksaan Rutin</h3>
                    <p>Konsultasi berkala dengan dokter spesialis</p>
                </div>
                <div class="prevention-card">
                    <div class="step-number">6</div>
                    <h3>Hindari Rokok & Alkohol</h3>
                    <p>Berhenti merokok dan batasi konsumsi alkohol</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Section -->
    <section class="emergency-section">
        <div class="container">
            <div class="emergency-content">
                <h2><i class="fas fa-exclamation-triangle"></i> Tanda Darurat</h2>
                <p>Segera cari pertolongan medis jika mengalami gejala berikut:</p>
                
                <div class="emergency-numbers">
                    <div class="emergency-number">
                        <div class="number">118</div>
                        <p>Ambulans Darurat</p>
                    </div>
                    <div class="emergency-number">
                        <div class="number">119</div>
                        <p>Rumah Sakit Terdekat</p>
                    </div>
                </div>
                
                <div style="text-align: left; max-width: 600px; margin: 0 auto;">
                    <h4>Gejala Darurat:</h4>
                    <ul style="list-style: none; margin-top: 1rem;">
                        <li style="padding: 0.5rem 0;">✓ Nyeri perut hebat dan mendadak</li>
                        <li style="padding: 0.5rem 0;">✓ Muntah darah atau berwarna kopi</li>
                        <li style="padding: 0.5rem 0;">✓ BAB berwarna hitam atau berdarah</li>
                        <li style="padding: 0.5rem 0;">✓ Sesak napas atau nyeri dada</li>
                        <li style="padding: 0.5rem 0;">✓ Penurunan kesadaran</li>
                    </ul>
                </div>
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
                </div>
                <div class="footer-column">
                    <h3>Menu</h3>
                    <ul class="footer-links">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="diagnosa.php">Diagnosa</a></li>
                        <li><a href="analisis.php">Analisis Mendalam</a></li>
                        <li><a href="makanan.php">Rekomendasi Makanan</a></li>
                        <li><a href="medis.php">Informasi Medis</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Kontak</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-envelope"></i> info@gastrocheck.com</a></li>
                        <li><a href="#"><i class="fas fa-phone"></i> +62 813 9215 8503</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> Pekalongan, Indonesia</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Download App</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fab fa-google-play"></i> Google Play</a></li>
                        <li><a href="#"><i class="fab fa-app-store"></i> App Store</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 GastroCheck. All rights reserved. | Sistem Pakar Diagnosa Penyakit Lambung Menggunakan Metode Forward Chaining</p>
            </div>
        </div>
    </footer>

    <script>
        // Filter diseases
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const diseaseCards = document.querySelectorAll('.disease-card');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    diseaseCards.forEach(card => {
                        if (filter === 'all') {
                            card.style.display = 'block';
                        } else {
                            const categories = card.getAttribute('data-category');
                            if (categories.includes(filter)) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        }
                    });
                });
            });
            
            // Tab functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Remove active class from all buttons and contents
                    tabBtns.forEach(b => b.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));
                    
                    // Add active class to clicked button and corresponding content
                    this.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                });
            });
            
            // Animation for cards
            const cards = document.querySelectorAll('.disease-card, .treatment-card, .prevention-card');
            
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in');
            });
        });

        // Add CSS animation
        const style = document.createElement('style');
        style.textContent = `
            .fade-in {
                animation: fadeInUp 0.6s ease-out forwards;
                opacity: 0;
            }
            
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>