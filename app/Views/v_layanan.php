<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Custom .css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/navbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/layanan.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/footer.css">
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
    <style>
        body {
            background-color: #F2F2F2;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <?= $this->include('_partial/v_navbar') ?>
    <div class="container-80">
        <div class="grid-container layanan-grid-3">
            <div class="layanan-card layanan-card-content">
                <a style="text-decoration:none;" href="<?= base_url() ?>design-graphics">
                    <img src="" alt="">
                    <div>
                        <h2 class="layanan-card-title">Design Graphics</h2>
                        <p class="layanan-card-desc">Sentuhan desain yang inspiratif, membangun citra yang tak terlupakan</p>
                        <div class="layanan-card-link">Selengkapnya</div>
                    </div>
                </a>
            </div>
            <div class="layanan-card layanan-card-content">
                <a style="text-decoration:none;" href="<?= base_url() ?>social-media-management">
                    <img src="" alt="">
                    <div>
                        <h2 class="layanan-card-title">Social Media Management</h2>
                        <p class="layanan-card-desc">Dengan layanan Social Media Management kami, bisnis Anda dapat dikelola secara efisien di dunia digital yang kompleks.</p>
                        <div class="layanan-card-link">
                            Selengkapnya
                        </div>
                    </div>
                </a>
            </div>
            <div class="layanan-card layanan-card-content">
                <a style="text-decoration:none;" href="<?= base_url() ?>web-development">
                    <img src="" alt="">
                    <div>
                        <h2 class="layanan-card-title">Web Development</h2>
                        <p class="layanan-card-desc">Wujudkan website profesional untuk berbagai kebutuhan dengan desain tampilan, fitur dan teknologi website yang paling up-to-date</p>
                        <div class="layanan-card-link">
                            Selengkapnya
                        </div>
                    </div>
                </a>
            </div>
            <div class="layanan-card layanan-card-content">
                <a style="text-decoration:none;" href="<?= base_url() ?>mobile-apps">
                    <img src="" alt="">
                    <div>
                        <h2 class="layanan-card-title">Mobile Apps</h2>
                        <p class="layanan-card-desc">Pilihan jasa pembuatan aplikasi mobile Android dan iOS terbaik dan hasil berkualitas</p>
                        <div class="layanan-card-link">
                            Selengkapnya
                        </div>
                    </div>
                </a>
            </div>
            <div class="layanan-card layanan-card-content">
                <a style="text-decoration:none;" href="<?= base_url() ?>video-production">
                    <img src="" alt="">
                    <div>
                        <h2 class="layanan-card-title">Video Production</h2>
                        <p class="layanan-card-desc">Layanan video production atau pembuatan video untuk berbagai macam kebutuhan promosi bisnis dan event</p>
                        <div class="layanan-card-link">
                            Selengkapnya
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?= $this->include('_partial/v_footer') ?>
</body>

</html>