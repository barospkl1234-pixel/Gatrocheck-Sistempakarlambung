<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Makanan - GastroCheck</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/makanan.css">
   
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
            <h1><i class="fas fa-utensils"></i> Rekomendasi Makanan Sehat</h1>
            <p>Panduan makanan untuk kesehatan lambung optimal berdasarkan kondisi medis</p>
        </div>
    </section>

    <!-- Food Categories -->
    <section class="food-categories">
        <div class="container">
            <div class="section-title">
                <h2>Kategori Makanan</h2>
                <p>Pilih makanan yang tepat berdasarkan kondisi lambung Anda</p>
            </div>
            
            <div class="categories-grid">
                <!-- Recommended Foods -->
                <div class="category-card">
                    <div class="category-header recommended">
                        <div class="category-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>Dianjurkan</h3>
                        <p>Makanan ramah lambung</p>
                    </div>
                    <div class="category-body">
                        <ul class="food-list recommended">
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-carrot"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Sayuran Hijau</h4>
                                    <p>Brokoli, bayam, kangkung</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-apple-alt"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Pisang & Melon</h4>
                                    <p>Tekstur lembut, rendah asam</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-fish"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Ikan Tanpa Lemak</h4>
                                    <p>Salmon, tuna, kod</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-egg"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Putih Telur</h4>
                                    <p>Protein tinggi, rendah lemak</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Oatmeal & Jahe</h4>
                                    <p>Menyehatkan pencernaan</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Foods to Avoid -->
                <div class="category-card">
                    <div class="category-header avoid">
                        <div class="category-icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <h3>Dihindari</h3>
                        <p>Makanan pemicu masalah</p>
                    </div>
                    <div class="category-body">
                        <ul class="food-list avoid">
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-pepper-hot"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Makanan Pedas</h4>
                                    <p>Cabe, merica, sambal</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-wine-bottle"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Alkohol & Kafein</h4>
                                    <p>Kopi, teh, minuman beralkohol</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-hamburger"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Makanan Berlemak</h4>
                                    <p>Gorengan, fast food</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-lemon"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Buah Asam</h4>
                                    <p>Jeruk, nanas, tomat</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-gas-pump"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Minuman Berkarbonasi</h4>
                                    <p>Soda, minuman bersoda</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Caution Foods -->
                <div class="category-card">
                    <div class="category-header caution">
                        <div class="category-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <h3>Hati-hati</h3>
                        <p>Konsumsi dalam batas wajar</p>
                    </div>
                    <div class="category-body">
                        <ul class="food-list caution">
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-cheese"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Produk Susu</h4>
                                    <p>Susu, keju, yogurt</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-bread-slice"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Roti & Pasta</h4>
                                    <p>Gluten mungkin mengganggu</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-drumstick-bite"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Daging Merah</h4>
                                    <p>Sapi, kambing, babi</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-cookie"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Makanan Manis</h4>
                                    <p>Kue, coklat, permen</p>
                                </div>
                            </li>
                            <li class="food-item">
                                <div class="food-icon">
                                    <i class="fas fa-egg"></i>
                                </div>
                                <div class="food-info">
                                    <h4>Kuning Telur</h4>
                                    <p>Lemak tinggi pada kuning</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meal Plans -->
    <section class="meal-plans">
        <div class="container">
            <div class="section-title">
                <h2>Contoh Pola Makan Sehari</h2>
                <p>Rencana makan sehat untuk lambung yang optimal</p>
            </div>
            
            <div class="plans-grid">
                <div class="plan-card">
                    <div class="plan-header">
                        <h3>Sarapan Pagi</h3>
                        <div class="plan-time">06:00 - 08:00</div>
                    </div>
                    <div class="meal-item">
                        <div class="meal-icon">
                            <i class="fas fa-bowl-food"></i>
                        </div>
                        <div class="meal-info">
                            <h4>Oatmeal dengan Pisang</h4>
                            <p>Oatmeal lembut dengan potongan pisang</p>
                        </div>
                    </div>
                    <div class="meal-item">
                        <div class="meal-icon">
                            <i class="fas fa-mug-hot"></i>
                        </div>
                        <div class="meal-info">
                            <h4>Teh Jahe Hangat</h4>
                            <p>Jahe segar dengan madu</p>
                        </div>
                    </div>
                </div>

                <div class="plan-card">
                    <div class="plan-header">
                        <h3>Makan Siang</h3>
                        <div class="plan-time">12:00 - 13:00</div>
                    </div>
                    <div class="meal-item">
                        <div class="meal-icon">
                            <i class="fas fa-fish"></i>
                        </div>
                        <div class="meal-info">
                            <h4>Ikan Bakar dengan Sayuran</h4>
                            <p>Salmon bakar dengan brokoli kukus</p>
                        </div>
                    </div>
                    <div class="meal-item">
                        <div class="meal-icon">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <div class="meal-info">
                            <h4>Pisang atau Melon</h4>
                            <p>Buah segar sebagai pencuci mulut</p>
                        </div>
                    </div>
                </div>

                <div class="plan-card">
                    <div class="plan-header">
                        <h3>Makan Malam</h3>
                        <div class="plan-time">18:00 - 19:00</div>
                    </div>
                    <div class="meal-item">
                        <div class="meal-icon">
                            <i class="fas fa-drumstick-bite"></i>
                        </div>
                        <div class="meal-info">
                            <h4>Ayam Rebus dengan Kentang</h4>
                            <p>Dada ayam tanpa kulit rebus</p>
                        </div>
                    </div>
                    <div class="meal-item">
                        <div class="meal-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="meal-info">
                            <h4>Sup Sayuran</h4>
                            <p>Wortel, buncis, dan labu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cooking Tips -->
    <section class="cooking-tips">
        <div class="container">
            <div class="section-title">
                <h2>Tips Memasak Sehat</h2>
                <p>Cara mengolah makanan untuk kesehatan lambung</p>
            </div>
            
            <div class="tips-grid">
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Hindari Menggoreng</h3>
                    <p>Gunakan metode rebus, kukus, atau panggang untuk mengurangi lemak</p>
                </div>
                
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-utensil-spoon"></i>
                    </div>
                    <h3>Gunakan Rempah Alami</h3>
                    <p>Jahe, kunyit, dan bawang putih sebagai pengganti penyedap</p>
                </div>
                
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Makan Teratur</h3>
                    <p>Jadwal makan yang konsisten membantu sistem pencernaan</p>
                </div>
                
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-glass-whiskey"></i>
                    </div>
                    <h3>Hidrasi Cukup</h3>
                    <p>Minum air putih 2 liter sehari, hindari minum saat makan</p>
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
        // Animasi untuk cards
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.category-card, .plan-card, .tip-card');
            
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in');
            });
        });

        // Tambahkan CSS animation
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