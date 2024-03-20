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
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/navbar.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_hdr.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_why.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_steps.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_package.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_porto.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_btm_konsul.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_testi.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-vp/vp_mod_konsul.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/footer.css">
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
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?= $this->include('pg_video_production/v_sect_hdr') ?>
    <?= $this->include('pg_video_production/v_sect_why') ?>
    <?= $this->include('pg_video_production/v_sect_steps') ?>
    <?= $this->include('pg_video_production/v_sect_package') ?>
    <?= $this->include('pg_video_production/v_sect_porto') ?>
    <?= $this->include('pg_video_production/v_sect_btm_konsul') ?>
    <?= $this->include('pg_video_production/v_sect_konsul') ?>
    <?= $this->include('_partial/v_footer') ?>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>