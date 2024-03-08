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
</head>

<body>
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
</body>

</html>