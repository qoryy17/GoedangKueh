<?= $this->extend('/customer/V_dashboard'); ?>
<?= $this->section("title") ?>Produk GoedangKueh<?= $this->endSection(); ?>
<?= $this->section("navbar") ?>vertical-wrapper v3 js-dropdown-menu<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<section class="shop-list-v2-page">
    <div class="container">
        <div class="heading-sub">
            <h3 class="pull-left">Daftar Produk</h3>
            <ul class="other-link-sub pull-right">
                <li><a href="#home">Home</a></li>
                <li><a class="active" href="#shop">Produk</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="widget-banner">
            <a href="#" class="images"><img src="<?= base_url('/TECHNO/SLIDER/Produk.jpg'); ?>" alt="images" class="img-responsive"></a>
            <div class="banner-text" style="background-color:rgba(0, 0, 0, 0.2); padding: 20px;">
                <h2 style="color: #FFFFFF;text-shadow: 0.5px 0.5px 0.5px black;">Produk GoedangKueh</h2>
                <p style="color: #FFFFFF;text-shadow: 0.5px 0.5px 0.5px black; letter-spacing: 0px;">Nikmati belanja kue, roti dan lainnya secara murah dengan diskon yang cuma didapatkan di <b>GoedangKueh</b> Rajanya Gudang Kue Indonesia</p>
            </div>
        </div>
        <div class="widget-product-list">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="filter-block">
                        <div class="filter-block-shop filter-price">
                            <div class="block-title">
                                <h3>FILTER BY HARGA</h3>
                            </div>
                            <div class="block-content">
                                <div class="price-range-holder">
                                    <input type="text" class="price-slider" value="">
                                    <span class="min-max">
                                        Harga: Rp.10.000 - Rp.5.000.000
                                    </span>
                                    <span class="filter-button">
                                        <a href="#">Filter</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="filter-block-shop filter-cate">
                            <div class="block-title">
                                <h3>Kategori</h3>
                            </div>
                            <div class="block-content">
                                <ul>
                                    <li class="active">
                                        <a href="#">Kue Tradisional</a>
                                        <span class="number">(223)</span>
                                    </li>
                                    <li>
                                        <a href="#">Roti & Pastry</a>
                                        <span class="number">(450)</span>
                                    </li>
                                    <li>
                                        <a href="#">Jajanan & Snack</a>
                                        <span class="number">(300)</span>
                                    </li>
                                    <li>
                                        <a href="#">Hampers</a>
                                        <span class="number">(90)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-block-shop">
                            <div class="block-title">
                                <h3>Lokasi</h3>
                            </div>
                            <div class="block-content">
                                <form>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Jabodetabek</label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Medan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Bandung</label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Jogjakarta</label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Palembang</label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Aceh</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-xs-12">
                    <div class="filter-block bd">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="box box-view">
                                    <span>Menampilkan 1–12 of 40 Hasil</span>
                                    <div class="button-view">
                                        <span class="col"><i class="ion-ios-keypad fa-3a"></i></span>
                                        <span class="list"><i class="icon-grid-4"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 margin-top3">
                                <div class="box show pull-left">
                                    <span>Tampilkan</span>
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">12
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">24</a></li>
                                        <li><a href="#">36</a></li>
                                    </ul>
                                    <span>per halaman</span>
                                </div>
                                <div class="box sort pull-right">
                                    <span>Urutkan:</span>
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" id="menu2">
                                        <span class="dropdown-label">Promo</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
                                        <li><a href="#" title="">Terbaru</a></li>
                                        <li><a href="#" title="">Dalam Negeri</a></li>
                                        <li><a href="#" title="">Luar Negeri</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list grid_full grid_sidebar grid-uniform">
                        <div class="product-list-item">
                            <div class="product-item-img">
                                <a href="#"><img src="<?= base_url('TECHNO/KUE KERING TAHAN LAMA/Butter/butter.png'); ?>" alt="images" class="img-responsive"></a>
                                <div class="label label-2 red label-top-20">Hot</div>
                            </div>
                            <div class="product-item-info">
                                <h3><a href="#" title="">Butter Cookies</a></h3>
                                <div class="product-item-star ratingstar sm">
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <span class="number">(45)</span>
                                </div>
                                <div class="prod-price">
                                    <span class="price black">Rp.60.000/450gr</span>
                                </div>
                                <div class="button-ver2">
                                    <a href="#" class="addcart-ver2" title="Add to cart"><span class="icon"></span>KERANJANG</a>
                                    <a href="#" class="quickview" title="quick view"><i class="ion-eye fa-4" aria-hidden="true"></i></a>
                                    <a href="#" class="wishlist" title="wishlist"><i class="ion-heart fa-4" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-item">
                            <div class="product-item-img">
                                <a href="#"><img src="<?= base_url('TECHNO/KUE KERING TAHAN LAMA/Choco Cornflakes/cornflake.png'); ?>" alt="images" class="img-responsive"></a>
                                <div class="label label-2 red label-top-20">Hot</div>
                            </div>
                            <div class="product-item-info">
                                <h3><a href="#" title="">Choco Cornflakes</a></h3>
                                <div class="product-item-star ratingstar sm">
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <span class="number">(60)</span>
                                </div>
                                <div class="prod-price">
                                    <span class="price black">Rp.45.000/250gr</span>
                                </div>
                                <div class="button-ver2">
                                    <a href="#" class="addcart-ver2" title="Add to cart"><span class="icon"></span>KERANJANG</a>
                                    <a href="#" class="quickview" title="quick view"><i class="ion-eye fa-4" aria-hidden="true"></i></a>
                                    <a href="#" class="wishlist" title="wishlist"><i class="ion-heart fa-4" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-item">
                            <div class="product-item-img">
                                <a href="#"><img src="<?= base_url('TECHNO/KUE KERING TAHAN LAMA/Chocolate Chips Cookies/choco chips cookie.png'); ?>" alt="images" class="img-responsive"></a>
                                <div class="label label-2 red label-top-20">Hot</div>
                            </div>
                            <div class="product-item-info">
                                <h3><a href="#" title="">Chocolate Chips Cookies</a></h3>
                                <div class="product-item-star ratingstar sm">
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <span class="number">(70)</span>
                                </div>
                                <div class="prod-price">
                                    <span class="price black">Rp.45.000/250gr</span>
                                </div>
                                <div class="button-ver2">
                                    <a href="#" class="addcart-ver2" title="Add to cart"><span class="icon"></span>KERANJANG</a>
                                    <a href="#" class="quickview" title="quick view"><i class="ion-eye fa-4" aria-hidden="true"></i></a>
                                    <a href="#" class="wishlist" title="wishlist"><i class="ion-heart fa-4" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-item">
                            <div class="product-item-img">
                                <a href="#"><img src="<?= base_url('TECHNO/KUE KERING TRADISIONAL/Bangkit Susu/bangkit susu.png'); ?>" alt="images" class="img-responsive"></a>
                                <div class="label label-2 red label-top-20">Hot</div>
                            </div>
                            <div class="product-item-info">
                                <h3><a href="#" title="">Bangkit Susu</a></h3>
                                <div class="product-item-star ratingstar sm">
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <span class="number">(45)</span>
                                </div>
                                <div class="prod-price">
                                    <span class="price black">Rp.130.000/1000gr</span>
                                </div>
                                <div class="button-ver2">
                                    <a href="#" class="addcart-ver2" title="Add to cart"><span class="icon"></span>KERANJANG</a>
                                    <a href="#" class="quickview" title="quick view"><i class="ion-eye fa-4" aria-hidden="true"></i></a>
                                    <a href="#" class="wishlist" title="wishlist"><i class="ion-heart fa-4" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-item">
                            <div class="product-item-img">
                                <a href="#"><img src="<?= base_url('TECHNO/KUE KERING TRADISIONAL/Akar Kelapa/akar.png'); ?>" alt="images" class="img-responsive"></a>
                                <div class="label label-2 red label-top-20">Hot</div>
                            </div>
                            <div class="product-item-info">
                                <h3><a href="#" title="">Akar Kelapa</a></h3>
                                <div class="product-item-star ratingstar sm">
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <span class="number">(35)</span>
                                </div>
                                <div class="prod-price">
                                    <span class="price black">Rp.35.000/200gr</span>
                                </div>
                                <div class="button-ver2">
                                    <a href="#" class="addcart-ver2" title="Add to cart"><span class="icon"></span>KERANJANG</a>
                                    <a href="#" class="quickview" title="quick view"><i class="ion-eye fa-4" aria-hidden="true"></i></a>
                                    <a href="#" class="wishlist" title="wishlist"><i class="ion-heart fa-4" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-item">
                            <div class="product-item-img">
                                <a href="#"><img src="<?= base_url('TECHNO/KUE KERING TRADISIONAL/Bawang/bawang.png'); ?>" alt="images" class="img-responsive"></a>
                                <div class="label label-2 red label-top-20">Hot</div>
                            </div>
                            <div class="product-item-info">
                                <h3><a href="#" title="">Kue Bawang</a></h3>
                                <div class="product-item-star ratingstar sm">
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                    <span class="number">(50)</span>
                                </div>
                                <div class="prod-price">
                                    <span class="price black">Rp.60.000/1000gr</span>
                                </div>
                                <div class="button-ver2">
                                    <a href="#" class="addcart-ver2" title="Add to cart"><span class="icon"></span>KERANJANG</a>
                                    <a href="#" class="quickview" title="quick view"><i class="ion-eye fa-4" aria-hidden="true"></i></a>
                                    <a href="#" class="wishlist" title="wishlist"><i class="ion-heart fa-4" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="product-pagination">
                        <ul class="pagination">
                            <li><a href="#"><i class="ion-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="ion-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>