<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= ASSETS ?>/user/images/favicon.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>/user/css/responsive.css">
    <!-- Modernizr js -->
    <script src="<?= ASSETS ?>/user/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <!-- Begin Header Top Area -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Top Left Area -->
                        <div class="col-lg-3 col-md-4">
                            <div class="header-top-left">
                                <ul class="phone-wrap">
                                    <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Left Area End Here -->
                        <!-- Begin Header Top Right Area -->
                        <div class="col-lg-9 col-md-8">
                            <div class="header-top-right">
                                <ul class="ht-menu">
                                    <!-- Begin Setting Area -->
                                    <li>
                                        <?php
                                        if (Session::get('customer')) {
                                            $name_customer = $_SESSION['customer_name'];
                                        } else {
                                            $name_customer = 'Account';
                                        }
                                        ?>
                                        <div class="ht-setting-trigger"><span style="text-transform: capitalize;"><?= $name_customer ?> <i class="bi bi-person-circle"></i></span></div>
                                        <div class="setting ht-setting">
                                            <ul class="ht-setting-list">
                                                <li><a href="login-register.html">My Account</a></li>
                                                <?php
                                                if (Session::get('customer')) {
                                                ?>
                                                    <li class=''><a href="<?= BASE_URL ?>/customer/logout">Log Out</a></li>
                                                    <li><a href="<?= BASE_URL ?>/cart/historyCart/<?php if (isset($_SESSION['id_customer'])) {
                                                                                            echo $_SESSION['id_customer'];
                                                                                        } else {
                                                                                            echo '';
                                                                                        } ?>">History Cart</a></li>

                                                <?php
                                                } else {
                                                ?>
                                                    <li class=''><a href="<?= BASE_URL ?>/customer/login">Log In</a></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Setting Area End Here -->
                                    <!-- Begin Currency Area -->
                                    <li>
                                        <span class="currency-selector-wrapper">Currency :</span>
                                        <div class="ht-currency-trigger"><span>USD $</span></div>
                                        <div class="currency ht-currency">
                                            <ul class="ht-setting-list">
                                                <li><a href="#">EUR €</a></li>
                                                <li class="active"><a href="#">USD $</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Currency Area End Here -->
                                    <!-- Begin Language Area -->
                                    <li>
                                        <span class="language-selector-wrapper">Language :</span>
                                        <div class="ht-language-trigger"><span>English</span></div>
                                        <div class="language ht-language">
                                            <ul class="ht-setting-list">
                                                <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Language Area End Here -->
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Top Area End Here -->
            <!-- Begin Header Middle Area -->
            <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Logo Area -->
                        <div class="col-lg-3">
                            <div class="logo pb-sm-30 pb-xs-30">
                                <a href="index.html">
                                    <img src="<?= ASSETS ?>/user/images/menu/logo/1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                            <!-- Begin Header Middle Searchbox Area -->
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Enter your search key ...">
                                <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <!-- Header Middle Searchbox Area End Here -->


                            <!-- Begin gio hang Area -->
                            <?php
                            if (isset($_SESSION['shopping_cart'])) {

                            ?>
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <?php
                                                $count = 0;
                                                $total = 0;
                                                $cart = $_SESSION['shopping_cart'];
                                                foreach ($cart as $key => $value) {
                                                    $sub_total = $value['product_price'] * $value['product_quantity'];
                                                    $total += $sub_total;
                                                    $count++;
                                                }
                                                ?>
                                                <span class="item-text"><?= number_format($total, 0, ',', '.') . 'đ' ?>
                                                    <span class="cart-item-count"><?= $count ?></span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <?php
                                                    $total = 0;
                                                    $cart = $_SESSION['shopping_cart'];
                                                    foreach ($cart as $key => $value) {
                                                        $sub_total = $value['product_price'] * $value['product_quantity'];
                                                        $total += $sub_total;
                                                    ?>
                                                        <li>
                                                            <a href="single-product.html" class="minicart-product-image">
                                                                <img src="<?= ROOT ?>/uploads/product/<?= $value['product_image'] ?>" alt="cart products">
                                                            </a>
                                                            <div class="minicart-product-details">
                                                                <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                                <span><?= number_format($value['product_price'], 0, ',', '.') . 'đ' ?> x <?= $value['product_quantity'] ?></span>
                                                            </div>
                                                            <button class="close" title="Remove">
                                                                <i class="fa fa-close"></i>
                                                            </button>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                                <p class="minicart-total">TOTAL: <span><?= number_format($total, 0, ',', '.') . 'đ' ?></span></p>
                                                <div class="minicart-button">
                                                    <a href="<?= BASE_URL ?>/cart/cart" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                            <?php
                            }else{
                            ?>
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                
                                                <span class="item-text">0đ
                                                    <span class="cart-item-count">0</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">                   
                                                <!-- <div class="minicart-button">
                                                    <a href="<?= BASE_URL ?>/cart/cart" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                </div> -->
                                                <div class="minicart-button">
                                                    <div class="cart-empty-header">
                                                        <img style="  width: 260px;" src="<?=ASSETS?>/user/images/cart-empty.png" title="Cart Empty" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                            <?php
                            }
                            ?>
                            <!-- Header Middle Right Area End Here -->

                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Middle Area End Here -->
            <!-- Begin Header Bottom Area -->
            <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Header Bottom Menu Area -->
                            <div class="hb-menu">
                                <nav>
                                    <ul>
                                        <li class=""><a href="<?= BASE_URL ?>">Trang Chủ</a>
                                        </li>
                                        <li class="megamenu-holder"><a href="<?= BASE_URL ?>/index/aboutUs">Giới Thiệu</a>
                                        </li>
                                        <li class="dropdown-holder"><a href="<?= BASE_URL ?>/userproduct/paging/1">Sản Phẩm</a>
                                        </li>
                                        <li><a href="<?=BASE_URL?>/userpost">Tin Tức</a></li>
                                        <li><a href="<?= BASE_URL ?>/index/contact">Liên hệ</a></li>
                                        <!-- <li><a href="shop-left-sidebar.html">Smartwatch</a></li>
                                        <li><a href="shop-left-sidebar.html">Accessories</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Bottom Menu Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom Area End Here -->
            <!-- Begin Mobile Menu Area -->
            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </header>