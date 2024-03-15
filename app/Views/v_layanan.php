<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/navbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/layanan.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/footer.css">
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
                <img src="" alt="">
                <div>
                    <h2 class="layanan-card-title">Design<br />Graphics</h2>
                    <p class="layanan-card-desc">Sentuhan desain yang inspiratif, membangun citra yang tak terlupakan</p>
                    <button class="layanan-card-button"><a href="<?= base_url() ?>/design-graphic">Selengkapnya</a></button>
                </div>
            </div>
            <div class="layanan-card layanan-card-content">
                <img src="" alt="">
                <div>
                    <h2 class="layanan-card-title">Social Media<br />Management</h2>
                    <p class="layanan-card-desc">Sentuhan desain yang inspiratif, membangun citra yang tak terlupakan</p>
                    <button class="layanan-card-button"><a href="<?= base_url() ?>/social-media-management">Selengkapnya</a></button>
                </div>
            </div>
            <div class="layanan-card layanan-card-content">
                <img src="" alt="">
                <div>
                    <h2 class="layanan-card-title">Web<br />Development</h2>
                    <p class="layanan-card-desc">Sentuhan desain yang inspiratif, membangun citra yang tak terlupakan</p>
                    <button class="layanan-card-button"><a href="<?= base_url() ?>/web-development">Selengkapnya</a></button>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('_partial/v_footer') ?>
</body>

</html>