<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Custom .css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-header.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-about.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-steps.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-solution.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-porto.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-cta-konsul.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-testi.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-ma/ly-btm-cta.css">
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
        <?= $this->include('pg_mobile_apps/v_mod_lay_hd') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_abt') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_stps') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_solut') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_porto') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_cta_konsul') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_tst') ?>
        <?= $this->include('pg_mobile_apps/v_mod_lay_btm_cta') ?>
    </main>
</body>

</html>