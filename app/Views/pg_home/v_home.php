<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- Bootstrap Icon .css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Slick Carousel .css-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Custom .css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/navbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_hdr.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_why.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_dg.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_sm.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_vp.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_wd.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_porto.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_testi.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_google_rating.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-hm/sect_order.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/footer.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/slick.css">
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <?= $this->include('_partial/v_navbar') ?>
    <?= $this->include('pg_home/hm_sect_header') ?>
    <?= $this->include('pg_home/hm_sect_why') ?>
    <?= $this->include('pg_home/hm_sect_design') ?>
    <?= $this->include('pg_home/hm_sect_social') ?>
    <?= $this->include('pg_home/hm_sect_video') ?>
    <?= $this->include('pg_home/hm_sect_web') ?>
    <?= $this->include('pg_home/hm_sect_porto') ?>
    <?= $this->include('pg_home/hm_sect_testi') ?>
    <?= $this->include('pg_home/hm_sect_google_rating') ?>
    <?= $this->include('pg_home/hm_sect_order') ?>
    <?= $this->include('_partial/v_footer') ?>
    <!-- jQuery .js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Slick Carousel .js-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 2,
            responsive: [{
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    </script>
</body>

</html>