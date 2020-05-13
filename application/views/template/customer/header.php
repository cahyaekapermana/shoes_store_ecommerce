<html>

<head>
    <!-- CSS -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.cs'); ?>" />
    <!-- Icon tab -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/login_template/images/icons/shoes.ico') ?>" />

    <!-- FRONTEND (SHOPPING CART) -->

    <link href="<?php echo base_url('assets/customer_template/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url('assets/customer_template/asie/css/ie10-viewport-bug-workaround.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/customer_template/custom.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/customer_template/jquery/jquery-ui.css') ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/customer_template/asie/js/ie-emulation-modes-warning.js') ?>"></script>

    <title><?php echo $title ?></title>

</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color:#353b48; ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="width:180px;" src="<?php echo base_url('assets/logo/logo.png') ?>">
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo site_url('c_customer') ?>">Home</a></li>
                    <li class="active"><a href="<?php echo site_url('c_customer/v_tampil_article') ?>">Article</a></li>
                    <!-- Controller  -->
                    <li class="active"><a href="<?php echo site_url('c_customer/tampil_cart') ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Keranjang Belanja</a></li>
                    <li class="active">
                        <a href="#">Login As &nbsp;<b><?php echo $this->session->userdata('s_username'); ?></b></a>
                    </li>
                    <li class="active">
                        <a href="<?php echo site_url('c_user/logout') ?>">Logout</a>
                    </li>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <!-- KATEGORI-->
    <div class="container" style="margin-top: 20px">

        <div class="row">

            <div class="col-lg-3">

                <div class="list-group">
                    <a class="list-group-item"><strong>Kategori Produk</strong></a>
                    <a href="<?php echo site_url('c_customer/index/') ?>" class="list-group-item">Semua</a>
                    <?php
                    foreach ($kategori as $row) {
                    ?>
                        <a href="<?php echo site_url('c_customer/index/' . $row['id']) ?> " class="list-group-item"><?php echo $row['nama_kategori']; ?></a>
                    <?php
                    }
                    ?>
                </div><br>

                <div class="list-group">
                    <a href="<?php echo site_url('c_customer/tampil_cart') ?>" class="list-group-item"><strong><i class="glyphicon glyphicon-shopping-cart"></i> Keranjang Belanja Anda</strong></a>
                    <?php

                    $cart = $this->cart->contents();

                    // If cart is empty, this will show below message.
                    if (empty($cart)) {
                    ?>
                        <a class="list-group-item">Keranjang Belanja Kosong</a>
                        <?php
                    } else {
                        $grand_total = 0;
                        foreach ($cart as $item) {
                            $grand_total += $item['subtotal'];
                        ?>
                            <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'], 0, ",", "."); ?>)=<?php echo number_format($item['subtotal'], 0, ",", "."); ?></a>
                        <?php
                        }
                        ?>

                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div class="row">