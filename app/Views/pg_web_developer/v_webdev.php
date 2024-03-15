<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiCreative - Web Developer</title>
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Custom .css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-wd/sect_wd_header.css">
</head>

<body>

    <?= $this->include('App\Views\pg_web_developer\wd_sect_header') ?>
    <!-- Harga-->
    <div class="harga">
        <div class="container harga-container">
            <div class="card card-bg-white card-content">
                <div class="ribbon blue-color">
                    <span class="ribbon-text">Best Value</span>
                </div>
                <h2 class="subheading price-black">Lite</h2>
                <img src="<?= base_url() ?>assets/dist/image/card-image-1.webp" alt="Card Image">
                <div class="start-form blue-color">
                    <span>MULAI DARI</span>
                </div>
                <div class="price price-black">
                    <span id="super">Rp</span>999<span id="sub">000,-</span>
                </div>
                <p class="paket-description description-grey">Paket <b>Website Pemula</b> untuk mulai Go Digital dengan budget terbatas</p>
                <ul>
                    <li>2+ Halaman</li>
                    <li>Gratis Domain + Hosting</li>
                    <li>Desain Standard</li>
                    <li>Pengerjaan 8 hari</li>
                </ul>
                <button class="card-button-1">Pilih Paket</button>
            </div>

            <div class="card card-bg-blue card-content">
                <div class="ribbon blue-color">
                    <span class="ribbon-text">Best Offer</span>
                </div>
                <h2 class="subheading subheading-white">Profesional</h2>
                <img src="<?= base_url() ?>assets/dist/image/card-image-1.webp" alt="Card Image">
                <div class="start-form">
                    <span>MULAI DARI</span>
                </div>
                <div class="price price-white">
                    <span id="super">Rp</span>5<span id="sub">Juta</span>
                </div>
                <p class="paket-description price-white">Paket <b>Website / Aplikasi Custom</b> seperti Toko Online, Sistem Web, dsb</p>
                <ul>
                    <li>4+ Halaman</li>
                    <li>Gratis Domain + Hosting</li>
                    <li>Desain Premium<br />(Eksklusif Custom)</li>
                    <li>Pengerjaan 15 Hari</li>
                </ul>
                <button class="card-button-2">Pilih Paket</button>
            </div>

            <div class="card card-bg-white card-content">
                <div class="ribbon blue-color">
                    <span class="ribbon-text">Custom Apps</span>
                </div>
                <h2 class="subheading price-black">Advanced</h2>
                <img src="<?= base_url() ?>assets/dist/image/card-image-1.webp" alt="Card Image">
                <div class="start-form blue-color">
                    <span>MULAI DARI</span>
                </div>
                <div class="price price-black">
                    <span id="super">Rp</span>10<span id="sub">Juta</span>
                </div>
                <p class="paket-description description-grey">Paket <b>Website / Aplikasi Custom</b> seperti Toko Online, Sistem Web, dsb</p>
                <ul class="price-white">
                    <li>Full Custom Fitur</li>
                    <li>Custom UI/UX Design</li>
                    <li>Integrasi 3rd Party</li>
                    <li>On-demand</li>
                </ul>
                <button class="card-button-1">Pilih Paket</button>
            </div>
        </div>
    </div>

    <!-- Layanan-->
    <div class="layanan">
        <div class="container-1">
            <div class="subtitle">
                LAYANAN KAMI
            </div>

            <div class="layanan-container">
                <div class="item-container">
                    <div class="layanan-image">
                        <img src="<?= base_url() ?>assets/dist/image/1 Responsive.webp" alt="Paket Lengkap All in One" width="91.15px" height="91.15px">
                    </div>

                    <div class="layanan-deskripsi">
                        <h3>Paket Lengkap All-in-One</h3>
                        <p>Sudah termasuk Domain + Hosting + SSL, Ide & Copywriting konten, Desain Grafis, Akses Admin dan masih banyak lagi</p>
                    </div>
                </div>

                <div class="item-container">
                    <div class="layanan-image">
                        <img src="<?= base_url() ?>assets/dist/image/3 User Friendly.webp" alt="Full Support & Maintenance" width="91.15px" height="91.15px">
                    </div>

                    <div class="layanan-deskripsi">
                        <h3>Full Support & Maintenance</h3>
                        <p>Dukungan teknis untuk memastikan pengelolaan website berjalan dengan lancar setelah dibuat</p>
                    </div>
                </div>

                <div class="item-container">
                    <div class="layanan-image">
                        <img src="<?= base_url() ?>assets/dist/image/4 Modern design.webp" alt="Desain & Teknologi Terkini" width="91.15px" height="91.15px">
                    </div>

                    <div class="layanan-deskripsi">
                        <h3>Desain & Teknologi Terkini</h3>
                        <p>Pembuatan Website Profesional dengan desain eksklusif serta kekinian yang didukung berbagai fitur & teknologi web terbaru</p>
                    </div>
                </div>

                <div class="item-container">
                    <div class="layanan-image">
                        <img src="<?= base_url() ?>assets/dist/image/2 seo efisien.webp" alt="Marketing Optimization" width="91.15px" height="91.15px">
                    </div>

                    <div class="layanan-deskripsi">
                        <h3>Marketing Optimization</h3>
                        <p>Implementasi fitur marketing seperti Google Analytics & Webmaster untuk melihat jumlah pengunjung + performa website</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ekstensi-->
    <div class="container ekstensi">
        <h2>Berbagai Pilihan Ekstensi Domain Website</h2>
        <p>BiCreative menawarkan Jasa Pembuatan Website Company Profile perusahaan, Toko Online / Jual Beli, Blog Pribadi / Personal. Dengan berbagai pilihan domain seperti .com .id .net</p>
        <div class="pilihan-domain">
            <a href="#">Lihat pilihan Domain ></a>
        </div>
    </div>

    <!-- Addon-->
    <div class="addon">
        <div class="container">
            <h2>Adds-On</h2>
            <h3>Berbagai layanan pendukung untuk menunjang performa website</h3>
        </div>

        <div class="addon-container">
            <div class="addon-item">
                <div class="addon-item-1">
                    <div class="image-icon">
                        <img src="<?= base_url() ?>assets/dist/image/Add On 1.svg" alt="Add On 1 Icon" width="63px" height="auto">
                    </div>
                    <div>
                        <h4>Jasa SEO Web</h4>
                        <h5>On-Page + Off-Page</h5>
                    </div>
                </div>
                <div class="addon-item-2">
                    <span>Solusi optimasi halaman website no.1 untuk meningkatkan treffic / pengunjung secara organik</span>
                </div>
                <div class="addon-item-3">
                    <button class="button-text">Mulai dari Rp 499Rb</button>
                </div>
            </div>
            <div class="addon-item">
                <div class="addon-item-1">
                    <div class="image-icon">
                        <img src="<?= base_url() ?>assets/dist/image/Add On 2.svg" alt="Add On 2 Icon" width="63px" height="auto">
                    </div>
                    <div>
                        <h4>Maintenance & Update</h4>
                        <h5>Limitless Support</h5>
                    </div>
                </div>
                <div class="addon-item-2">
                    <span>Solusi untuk outsourcing maintenance dan update konten di dalam website beserta laporan berkala</span>
                </div>
                <div class="addon-item-3">
                    <button class="button-text">Mulai dari Rp 299Rb</button>
                </div>
            </div>
            <div class="addon-item">
                <div class="addon-item-1">
                    <div class="image-icon">
                        <img src="<?= base_url() ?>assets/dist/image/Add On 3.svg" alt="Add On 3 Icon" width="63px" height="auto">
                    </div>
                    <div>
                        <h4>Pembuatan Artikel Blog</h4>
                        <h5>Berita / Artikel</h5>
                    </div>
                </div>
                <div class="addon-item-2">
                    <span>Solusi pembuatan konten pemasaran bisnis di website, baik dengan SEO, copywriting & jurnalistik</span>
                </div>
                <div class="addon-item-3">
                    <button class="button-text">Mulai dari Rp 99Rb</button>
                </div>
            </div>
            <div class="addon-item">
                <div class="addon-item-1">
                    <div class="image-icon">
                        <img src="<?= base_url() ?>assets/dist/image/Add On 4.svg" alt="Add On 4 Icon" width="63px" height="auto">
                    </div>
                    <div>
                        <h4>Paid Ads / Digital Ads</h4>
                        <h5>Google Ads</h5>
                    </div>
                </div>
                <div class="addon-item-2">
                    <span>Solusi pasang iklan di Google untuk membantu website Anda tambil di halaman pertama pencarian</span>
                </div>
                <div class="addon-item-3">
                    <button class="button-text">Mulai dari Rp 749Rb</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Order-->
    <div class="order-1">
        <div class="container-1">
            <div class="order-grid">
                <div class="order-1">
                    <div>
                        <span class="order-number">1</span>
                    </div>
                    <div class="order-subtitle">
                        <span>Order Layanan</span>
                    </div>
                    <div class="order-description">
                        <span>Jelaskan kebutuhan website yang akan dibuat pada formulir pemesanan atau konsultasikan kebutuhan dengan tim kami.</span>
                    </div>
                </div>

                <div class="order-2">
                    <div>
                        <span class="order-number">2</span>
                    </div>

                    <div class="order-subtitle">
                        <span>Proses Development</span>
                    </div>

                    <div class="order-description">
                        <span>Website akan mulai dibuat dengan metode profesional. Anda akan mendapatkan laporan perkembangan secara berkala.</span>
                    </div>
                </div>

                <div class="order-3">
                    <div>
                        <span class="order-number">3</span>
                    </div>
                    <div class="order-subtitle">
                        <span>Website Siap Mendunia</span>
                    </div>
                    <div class="order-description">
                        <span>Hanya setelah Anda puas dengan website yang dibuat, website akan dipublish dengan nama domain yang dipilih.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div>
            <a style="font-size:14.87px;color:#707070;padding:15px 0;" href="https://www.instagram.com/bicreative.id/" target="_blank" rel="noopener" title="Official Instagram BiCreative.ID">
                <img src="https://www.svgrepo.com/show/452229/instagram-1.svg" width="18px" height="18px" /> Instagram
            </a>

            <a style="font-size:14.87px;color:#707070;padding:15px 0;" href="https://www.facebook.com/bicreative.id" target="_blank" rel="noopener" title="Official Facebook Page BiCreative.ID">
                <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" width="18px" height="18px" /> Facebook
            </a>

            <a style="font-size:14.87px;color:#707070;padding:15px 0;" href="#" target="_blank" rel="noopener" title="Official Behance BiCreative.ID">
                <img src="https://www.svgrepo.com/show/382716/behance.svg" width="18px" height="18px" /> Behance
            </a>

            <a style="font-size:14.87px;color:#707070;padding:15px 0;" href="#" target="_blank" rel="noopener" title="Official Pinterest BiCreative.ID">
                <img src="https://www.svgrepo.com/show/475670/pinterest-color.svg" width="18px" height="18px" /> Pinterest
            </a>

            <a style="font-size:14.87px;color:#707070;padding:15px 0;" href="#" target="_blank" rel="noopener" title="Official Dribbble BiCreative.ID">
                <img src="https://www.svgrepo.com/show/353670/dribbble-icon.svg" width="18px" height="18px" /> Dribbble
            </a>
        </div>
    </footer>
</body>

</html>