<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?= $this->renderSection('title'); ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('TECHNO/LOGO/GoedangKuehIco.png'); ?>" type="image/png" />
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/slick-theme.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/bootstrap-slider.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Clickbuy/css/modif.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url('Clickbuy/js/jquery.js'); ?>"></script>
</head>

<body>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cari Produk </h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <form method="get" class="searchform" action="/search" role="search">
                            <input type="hidden" name="type" value="product">
                            <input type="text" name="q" class="form-control control-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="ion-ios-search"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="topbar-mobile hidden-lg hidden-md">
            <div class="active-mobile">
                <div class="language-popup dropdown">
                    <a id="label" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="icon"><i class="ion-ios-world-outline" aria-hidden="true"></i></span>
                        <span>Indonesian</span>
                        <span class="ion-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="label">
                        <li><a href="#">Indonesian</a></li>
                        <li><a href="#">English</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-nav">
                <div class="active-mobile">
                    <div class="header_user_info popup-over e-scale hidden-lg hidden-md dropdown">
                        <div data-toggle="dropdown" class="popup-title dropdown-toggle" title="Account">
                            <i class="ion-android-person"></i><span> Akun</span>
                        </div>
                        <ul class="links dropdown-menu list-unstyled">
                            <li>
                                <a id="customer_login_link" href="#" title="Sign in"><i class="ion-log-in"></i> Masuk</a>
                            </li>
                            <li>
                                <a id="customer_register_link" href="#" title="Register"><i class="ion-ios-personadd"></i> Daftar</a>
                            </li>
                            <li>
                                <a class="account" rel="nofollow" href="#" title="My account"><i class="ion-ios-person"></i> Akun Saya</a>
                            </li>
                            <li>
                                <a id="wishlist-total" title="Wishlist" href="#"><i class="ion-ios-heart"></i> Favorit</a>
                            </li>
                            <li>
                                <a href="#" title="Check out"><i class="ion-ios-cart"></i> Keranjang</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="active-mobile search-popup pull-right">
                    <div class="search-popup dropdown" data-toggle="modal" data-target="#myModal">
                        <i class="ion-search fa-3a"></i>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="top-nav hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="left-nav">
                            <div class="location dropdown">
                                <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon"><i class="ion-ios-location" aria-hidden="true"></i></span>
                                    <span>Kirim Ke Alamat</span>
                                    <span class="ion-chevron-down"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label1">
                                    <li><a href="#">Kantor</a></li>
                                    <li><a href="#">Rumah</a></li>
                                </ul>
                            </div>
                            <div class="language dropdown">
                                <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon"><i class="ion-ios-world-outline" aria-hidden="true"></i></span>
                                    <span>Indonesian</span>
                                    <span class="ion-chevron-down"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label2">
                                    <li><a href="#">Indonesian</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="right-nav">
                            <ul>
                                <li><a href="#"><i class="ion-ios-heart fa-1a" aria-hidden="true"></i>Favorit</a></li>
                                <li><a href="#"><i class="ion-arrow-swap fa-1a" aria-hidden="true"></i>Pengembalian</a></li>
                                <li><a href="#"><i class="ion-ios-personadd fa-1a" aria-hidden="true"></i>Buat Akun</a></li>
                                <li><a href="#"><i class="ion-log-in fa-1a" aria-hidden="true"></i>Masuk</a></li>
                            </ul>
                            <span class="phone">061 8997 2012</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-8 col-xs-7 logo">
                        <a href="#" title="GoedangKueh"><img src="<?= base_url('TECHNO/LOGO/GoedangKueh.png'); ?>" alt="images" class="img-reponsive"></a>
                    </div>
                    <div class="col-md-9 col-sm-4 col-xs-5 nextlogo">
                        <div class="block block-2">
                            <div class="cart">
                                <a href="#" title="" id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="photo photo-cart">
                                        <img src="<?= base_url('Clickbuy/img/cart.png'); ?>" alt="images" class="img-reponsive">
                                        <span class="lbl">01</span>
                                    </div>
                                    <p class="inform inform-cart">
                                        <span class="strong">Keranjang<br></span>
                                        <span class="price-cart">Rp. 100.000,00</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-cart" aria-labelledby="label3">
                                    <ul>
                                        <li>
                                            <div class="item-order">
                                                <div class="item-photo">
                                                    <a href="#"><img width="100px" height="100px" src="<?= base_url('TECHNO/ROTI KERING DAN PASTRY/Cheese Stick/keju.png'); ?>" alt="images" class="img-responsive"></a>
                                                </div>
                                                <div class="item-content">
                                                    <h3><a href="#" title="">Cheese Stick</a></h3>
                                                    <p class="price black">Rp. 80.000</p>
                                                    <p class="quantity">x1</p>
                                                </div>
                                            </div>
                                            <div class="btn-delete"><a href="#" title="" class="btndel">x</a></div>
                                        </li>
                                    </ul>
                                    <div class="content-1">
                                        <span class="total">Total: <strong class="price black">Rp. 80.000</strong></span>
                                        <span class="quantity"><strong class="number">01</strong> Produk</span>
                                    </div>
                                    <div class="content-2">
                                        <a href="#" class="addcart">Tambah</a>
                                        <a href="#" class="viewcart">Lihat Keranjang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block-1">
                            <div class="protect">
                                <div class="photo">
                                    <svg width="28" height="33" id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180.05 214.27">
                                        <title>security</title>
                                        <path d="M196.93,55.17c-.11-5.78-.21-11.25-.21-16.54a7.5,7.5,0,0,0-7.5-7.5c-32.07,0-56.5-9.22-76.85-29a7.5,7.5,0,0,0-10.46,0c-20.35,19.79-44.77,29-76.84,29a7.5,7.5,0,0,0-7.5,7.5c0,5.29-.1,10.76-.22,16.54-1,53.84-2.44,127.57,87.33,158.68a7.49,7.49,0,0,0,4.91,0C199.36,182.74,198,109,196.93,55.17ZM107.13,198.81c-77-28-75.82-89.23-74.79-143.35.06-3.25.12-6.4.16-9.48,30-1.27,54.06-10.37,74.63-28.28,20.57,17.91,44.59,27,74.63,28.28,0,3.08.1,6.23.16,9.48C183,109.58,184.12,170.84,107.13,198.81Z" transform="translate(-17.11 0)" />
                                        <path d="M133,81.08l-36.2,36.2L81.31,101.83a7.5,7.5,0,0,0-10.61,10.61l20.75,20.75a7.5,7.5,0,0,0,10.61,0l41.5-41.5A7.5,7.5,0,1,0,133,81.08Z" transform="translate(-17.11 0)" />
                                    </svg>
                                </div>
                                <p class="inform">
                                    <span class="strong">Hak Cipta<br></span> Terlindungi
                                </p>
                            </div>
                            <div class="return">
                                <div class="photo">
                                    <svg width="30" height="30" id="Capa_2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 612.85">
                                        <title>update-arrows</title>
                                        <path d="M600.48,221.79c-14.43-50.5-40.14-94.33-77.94-132.13a300.48,300.48,0,0,0-100-66.57C385,7.84,346.58,0,306.78,0V37.47c69.91,0,138.93,27,190,78.28A264.15,264.15,0,0,1,564.7,231.16c12.55,43.87,14.38,88,4.68,132.47A261.77,261.77,0,0,1,509.83,482l-52.18-51.18V558.33l130.13,2-52.18-52.18Q587.78,448.93,604.84,373A301.45,301.45,0,0,0,600.48,221.79Z" transform="translate(-0.43)" />
                                        <path d="M47.85,382A267.44,267.44,0,0,1,43.5,249.56,263.58,263.58,0,0,1,103.38,130.8l52.18,51.85V54.53L25.44,53.19l51.85,51.52Q25.11,163.92,8,239.85a301.82,301.82,0,0,0,4.35,151.54c14.34,50.2,40.14,94,77.95,131.81a300.35,300.35,0,0,0,100,66.57,306.59,306.59,0,0,0,116.42,23.08v-36.8a267,267,0,0,1-190.35-78.94C83.54,464.09,60.41,425.9,47.85,382Z" transform="translate(-0.43)" />
                                    </svg>
                                </div>
                                <p class="inform">
                                    <span class="strong">Gratis<br></span> Ongkir
                                </p>
                            </div>
                        </div>
                        <div class="search hidden-xs hidden-sm">
                            <form action="#" class="search-form">
                                <input type="text" name="s" class="form-control" placeholder="Cari Produk...">
                                <button type="submit" class="search-icon"></button>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6 column-left">
                        <aside id="column-left">
                            <nav class="navbar-default">
                                <div class="menu-heading js-nav-menu">KATEGORI</div>
                                <div class="<?= $this->renderSection('navbar'); ?>">
                                    <!-- <div class="vertical-wrapper js-dropdown-menu js-dropdown-open active"> -->
                                    <!-- <div class="vertical-wrapper v3 js-dropdown-menu"> -->
                                    <ul class="level0">
                                        <li><a href="#">Kue Tradisional</a></li>
                                        <li><a href="#">Roti & Pastry</a><span class="icon"></span></li>
                                        <li><a href="#">Jajanan & Snack</a><span class="icon"></span></li>
                                        <li><a href="#">Hampers</a><span class="icon icon-camera"></span></li>
                                        <li class="sub-form-li" style="background-color: #6BCE04;">
                                            <div>
                                                Langganan
                                            </div>
                                            <form action="#" class="sub-form">
                                                <input type="text" name="e" class="form-control" placeholder="Your email here...">
                                                <button type="submit" class="btn btn-sub" style="color: black; text-decoration: none;">Kirim <span class="ion-chevron-right"></span></button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </aside>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-6 column-right">
                        <div class="deal">
                            <a href="#" class="btn-deal">Promo Terbatas</a>
                        </div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="menu-title">MENU</span>
                        </button>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="menubar js-menubar">
                                <li class=" menu-homepage menu-item-has-child dropdown">
                                    <a href="<?= site_url('home'); ?>" title="Home"><i class="fa fa-home"></i>Beranda</a>
                                </li>
                                <li class=" menu-demo-page menu-item-has-child dropdown">
                                    <a href="#" title="Sellerdemo">Produk</a>
                                    <span class="plus js-plus-icon"></span>
                                    <div class="dropdown-menu dropdown-menu-bg">
                                        <ul class="level1">
                                            <li class="sub-menu col-3">
                                                <a href="#">Kue</a>
                                                <ul class="level2">
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Tradisional</a></li>
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Luar Negeri</a></li>
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Impor</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-menu col-3">
                                                <a href="#">Roti</a>
                                                <ul class="level2">
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Tradisional</a></li>
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Luar Negeri</a></li>
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Impor</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-menu col-3">
                                                <a href="#">Hampers</a>
                                                <ul class="level2">
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Oleh-Oleh</a></li>
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Pernikahan</a></li>
                                                    <li class="col-inner"><a href="<?= site_url('product'); ?>" title="">Lainnya</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                <li class="dropdown menu-blog-page menu-item-has-child">
                                    <a href="#" title="Blog">Berita</a>
                                    <span class="plus js-plus-icon"></span>
                                    <ul class="dropdown-menu menu-level menu-level-last">
                                        <li><a href="#" title="blog">Kuliner Lokal</a></li>
                                        <li><a href="#" title="blog-single">Kuliner Luar Negeri</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown menu-contact-page menu-item-has-child">
                                    <a href="#" title="ContactUs">Tentang</a>
                                    <span class="plus js-plus-icon"></span>
                                    <ul class="dropdown-menu menu-level">
                                        <li><a href="#" title="contact us">Kontak </a></li>
                                        <li><a href="#" title="about us">Saran & Kritik</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

    <!-- Konten Website GoedangKueh -->
    <?php if (session()->getFlashdata('message')) : ?>
        <?= session()->getFlashdata('message'); ?>
    <?php endif; ?>
    <?= $this->renderSection('content'); ?>
    <!-- End Konten Website -->

    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                    <div class="fea-box">
                        <div class="photo">
                            <img src="<?= base_url('Clickbuy/img/gift.png'); ?>" alt="images" class="img-reponsive">
                        </div>
                        <p class="inform-ver2">
                            <span class="strong">Hampers<br></span> Tersedia Produk Hampers
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                    <div class="fea-box">
                        <div class="photo">
                            <img src="<?= base_url('Clickbuy/img/fly.png'); ?>" alt="images" class="img-reponsive">
                        </div>
                        <p class="inform-ver2">
                            <span class="strong">Pengiriman<br></span> Keseluruh Daerah Tanah Air
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                    <div class="fea-box">
                        <div class="photo">
                            <img src="<?= base_url('Clickbuy/img/return.png'); ?>" alt="images" class="img-reponsive">
                        </div>
                        <p class="inform-ver2">
                            <span class="strong">Pengembalian<br></span> Klaim Garansi Produk Rusak
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                    <div class="fea-box">
                        <div class="photo">
                            <img src="<?= base_url('Clickbuy/img/secu.png'); ?>" alt="images" class="img-reponsive">
                        </div>
                        <p class="inform-ver2">
                            <span class="strong">Layanan<br></span> Aman Dan Terpercaya
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="info">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 col-xs-12 ">
                        <div class="photo">
                            <a href="#"><img src="<?= base_url('TECHNO/LOGO/GoedangKueh.png'); ?>" alt="images" class="img-responsive"></a>
                        </div>
                        <p class="info-desc">Rajanya Gudang Kue Indonesia</p>
                        <div class="widget-info">
                            <ul>
                                <li><i class="ion-ios-location fa-4" aria-hidden="true"></i>Jl. Pintu Air I/Jend. AH Nasution No. 70, Medan Johor Sumatera Utara.</li>
                                <li class="clearfix"></li>
                                <li><i class="ion-ios-telephone fa-4" aria-hidden="true"></i>
                                    <p class="title-contain">061 8997 2012</p>
                                </li>
                                <li class="clearfix"></li>
                                <li><i class="ion-email-unread fa-4" aria-hidden="true"></i>
                                    <p class="title-contain">goedangkueh@support.com</p>
                                </li>
                                <li class="clearfix"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 pd-left">
                                <h3>Link Terkait</h3>
                                <ul class="fmenu">
                                    <li><a href="#">Karir</a></li>
                                    <li><a href="#">Mitra</a></li>
                                    <li><a href="#">Tentang GoedangKueh</a></li>
                                    <li><a href="#">Kuliner Nusantara</a></li>
                                    <li><a href="#">Wonderful Indonesia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h3>Informasi Baru</h3>
                        <p align="justify" class="news-desc">Dapat Info Seputar GoedangKueh, Dapatkan Diskon, Promo dan Gratis Ongkir Serta Penawaran Menarik Lainnya</p>
                        <form action="#" class="news-letter-form">
                            <input type="text" name="e" class="form-control" placeholder="Masukkan Email Anda...">
                            <button type="submit" class="btnsub">Langganan</button>
                        </form>
                        <h3 class="titles">Ikuti Kami:</h3>
                        <ul class="social">
                            <li><a href="#"><i class="ion-social-facebook fa-3" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter fa-3" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus fa-3" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube fa-3" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin fa-3" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-footer">
            <div class="container">
                <h1 class="heading-default">Kategori Populer</h1>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 block-left">
                        <div class="block-footer">
                            <h2 class="heading-primary">Apa Yang Baru ?</h2>
                            <p class="description-primary">
                                <a title="Kontent" href="#">Choco Cornflakes</a>,&nbsp;
                                <a title="Kontent" href="#">Chocolate Chips Cookies</a>,&nbsp;
                                <a title="Kontent" href="#">Cornflakes Choco Chips</a>,&nbsp;
                                <a title="Kontent" href="#">Oatmeal</a>,&nbsp;
                                <a title="Kontent" href="#">Butter</a>,&nbsp;
                                <a title="Kontent" href="#">Lidah Kucing</a>,&nbsp;
                                <a title="Kontent" href="#">Salju</a>,&nbsp;
                            </p>
                        </div>
                        <div class="block-footer">
                            <h2 class="heading-primary">Kue Tradisional</h2>
                            <p class="description-primary">
                                <a title="Kontent" href="#">Bangkit Susu</a>,&nbsp;
                                <a title="Kontent" href="#">Bawang</a>,&nbsp;
                                <a title="Kontent" href="#">Jahe</a>,&nbsp;
                                <a title="Kontent" href="#">Kipas</a>,&nbsp;
                                <a title="Kontent" href="#">Kuping Gajah</a>,&nbsp;
                                <a title="Kontent" href="#">Cubit Dahlia</a>,&nbsp;
                                <a title="Kontent" href="#">Kismis</a>,&nbsp;
                                <a title="Kontent" href="#">Nastar</a>,&nbsp;
                                <a title="Kontent" href="#">Sagu Keju</a>,&nbsp;
                                <a title="Kontent" href="#">Semprit</a>,&nbsp;
                            </p>
                        </div>
                        <div class="block-footer no-padding-bottom">
                            <h2 class="heading-primary">Roti</h2>
                            <p class="description-primary">
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 block-right">
                        <div class="block-footer">
                            <h2 class="heading-primary">Jajanan & Snack</h2>
                            <p class="description-primary">
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                                <a title="Kontent" href="#">Kontent</a>,&nbsp;
                            </p>
                        </div>
                        <div class="block-footer">
                            <h2 class="heading-primary">Mitra Kami</h2>
                            <p class="description-primary">
                                <a title="Kontent" href="#">Oleh-Oleh Medan</a>,&nbsp;
                                <a title="Kontent" href="#">Kuliner Indonesia</a>,&nbsp;
                                <a title="Kontent" href="#">Jajanan Asik</a>,&nbsp;
                                <a title="Kontent" href="#">Food Traveler</a>,&nbsp;
                                <a title="Kontent" href="#">Toko Serba Kue</a>,&nbsp;
                                <a title="Kontent" href="#">Aroma Bakery</a>,&nbsp;
                                <a title="Kontent" href="#">Majestic Bakery</a>,&nbsp;
                                <a title="Kontent" href="#">Meranti Bakery</a>,&nbsp;
                                <a title="Kontent" href="#">Amanda Brownies</a>,&nbsp;
                                <a title="Kontent" href="#">Cake And Pastry Cookies</a>,&nbsp;
                            </p>
                        </div>
                        <div class="block-footer no-padding-bottom">
                            <h2 class="heading-primary">Pengiriman</h2>
                            <p class="description-primary">
                                <a title="Kontent" href="#">Jabodetabek</a>,&nbsp;
                                <a title="Kontent" href="#">Semarang</a>,&nbsp;
                                <a title="Kontent" href="#">Kalimantan</a>,&nbsp;
                                <a title="Kontent" href="#">Surabaya</a>,&nbsp;
                                <a title="Kontent" href="#">Medan</a>,&nbsp;
                                <a title="Kontent" href="#">Palembang</a>,&nbsp;
                                <a title="Kontent" href="#">Aceh</a>,&nbsp;
                                <a title="Kontent" href="#">Padang</a>,&nbsp;
                                <a title="Kontent" href="#">Bali</a>,&nbsp;
                                <a title="Kontent" href="#">Jogjakarta</a>,&nbsp;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <span>© <a href="#" title="">GoedangKueh</a> <?php echo date('Y'); ?> - All Rights Reserved.</span>
                <ul class="payment">
                    <li><a href="#"><img src="<?= base_url('Clickbuy/img/paypal.png'); ?>" alt="images" class="img-responsive"></a></li>
                    <li><a href="#"><img src="<?= base_url('Clickbuy/img/visa.png'); ?>" alt="images" class="img-responsive"></a></li>
                    <li><a href="#"><img src="<?= base_url('Clickbuy/img/american.png'); ?>" alt="images" class="img-responsive"></a></li>
                    <li><a href="#"><img src="<?= base_url('Clickbuy/img/mastercard.png'); ?>" alt="images" class="img-responsive"></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="<?= base_url('Clickbuy/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('Clickbuy/js/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('Clickbuy/js/slick.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('Clickbuy/js/bootstrap-slider.min.js'); ?>"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="<?= base_url('Clickbuy/js/main.js'); ?>"></script>
</body>

</html>