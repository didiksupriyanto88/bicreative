<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Production - BiCreative</title>
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Custom .css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/navbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_hdr.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_why.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_steps.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_package.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_porto.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_testi.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_btm_konsul.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/vid-modal.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/footer.css">

</head>

<body>
    <!-- Navbar-->

    <!-- Header-->
    <?= $this->include('pg_video_production/v_sect_hdr') ?>

    <?= $this->include('pg_video_production/v_sect_why') ?>

    <?= $this->include('pg_video_production/v_sect_steps') ?>

    <!-- Paket Video-->
    <?= $this->include('pg_video_production/v_sect_package') ?>

    <!-- Protofolio-->
    <?= $this->include('pg_video_production/v_sect_porto') ?>

    <?= $this->include('pg_video_production/v_sect_btm_konsul') ?>

    <!-- Testimoni-->
    <?= $this->include('pg_video_production/v_sect_testi') ?>

    <!-- Footer-->
    <?= $this->include('_partial/v_footer') ?>
    <script>

    </script>
</body>

</html>