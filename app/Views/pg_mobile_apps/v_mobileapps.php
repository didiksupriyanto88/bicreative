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
    <!-- Custom .css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/navbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-header.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-about.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-steps.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-solution.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-porto.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-cta-konsul.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-testi.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-btm-cta.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/footer.css">
    <!-- Internal .css-->
    <style>
        body {
            background-color: #1E1E1E;
            color: white;
            font-family: "Montserrat", sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        .ma-color-theme {
            color: #5de382;
        }

        .container-80 {
            width: 80%;
            margin: auto;
        }

        .container-95 {
            width: 95%;
            margin: auto;
        }

        @media only screen and (max-width: 480px) {
            .container-95 {
                width: 80%;
            }
        }

        .pad-35 {
            padding: 35px 0;
        }
    </style>
</head>

<body>
    <main>
        <?= $this->include('_partial/v_navbar') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_hd') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_abt') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_stps') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_solut') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_porto') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_cta_konsul') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_tst') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_btm_cta') ?>
        <?= $this->include('_partial/v_footer') ?>
    </main>
</body>

</html>