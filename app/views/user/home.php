<div class="product-area pt-60 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                        <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Sản phẩm Hot</span></a></li>
                        <li><a data-toggle="tab" href="#li-bestseller-product"><span>Sản phẩm mới nhất</span></a></li>
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">
                        <?php
                        foreach ($product_hot as $key => $pro_hot) :
                        ?>
                            <form action="<?= BASE_URL ?>/cart/addCart" method="POST" data>
                                <input type="hidden" value="<?= $pro_hot['id_product'] ?>" name="product_id">
                                <input type="hidden" value="<?= $pro_hot['title_product'] ?>" name="product_title">
                                <input type="hidden" value="<?= $pro_hot['img_product'] ?>" name="product_image">
                                <input type="hidden" value="<?= $pro_hot['price_product'] ?>" name="product_price">
                                <input type="hidden" value="1" name="product_quantity">
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_hot['id_product'] ?>">
                                                <img src="<?= ROOT ?>/uploads/product/<?= $pro_hot['img_product'] ?>" alt="Li's Product Image">
                                            </a>

                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">

                                                <h4><a class="product_name" href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_hot['id_product'] ?>"><?= $pro_hot['title_product'] ?></a></h4>
                                                <div class="price-box">
                                                    <span class="new-price"><?= number_format($pro_hot['price_product'], 0, ',', '.') . 'đ' ?></span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><input type="submit" value="ADD TO CART"></li>
                                                    <li><a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_hot['id_product'] ?>" title="quick view" ><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </form>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <!-- end sản phẩm hot -->
            <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                <div class="row">
                    <!-- Sản phẩm mới nhất -->
                    <div class="product-active owl-carousel">

                        <?php
                        foreach ($product_new as $key => $pro_new) :
                        ?>
                            <form action="<?= BASE_URL ?>/cart/addCart" method="POST" data>
                                <input type="hidden" value="<?= $pro_new['id_product'] ?>" name="product_id">
                                <input type="hidden" value="<?= $pro_new['title_product'] ?>" name="product_title">
                                <input type="hidden" value="<?= $pro_new['img_product'] ?>" name="product_image">
                                <input type="hidden" value="<?= $pro_new['price_product'] ?>" name="product_price">
                                <input type="hidden" value="1" name="product_quantity">
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_new['id_product'] ?>">
                                                <img src="<?= ROOT ?>/uploads/product/<?= $pro_new['img_product'] ?>" alt="Li's Product Image">
                                            </a>

                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">

                                                <h4><a class="product_name" href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_new['id_product'] ?>"><?= $pro_new['title_product'] ?></a></h4>
                                                <div class="price-box">
                                                    <span class="new-price"><?= number_format($pro_new['price_product'], 0, ',', '.') . 'đ' ?></span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><input type="submit" value="ADD TO CART"></li>
                                                    <li>
                                                        <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_new['id_product'] ?>" title="quick view" >
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </form>
                        <?php
                        endforeach;
                        ?>

                    </div>
                </div>
            </div>
            <!-- end sản phẩm mới nhất -->
        </div>
    </div>
</div>

<!-- Product Area End Here -->
<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner">
    <div class="container">
        <!-- Begin Single Banner Area -->
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner">
                    <a href="#">
                        <img src="<?= ASSETS ?>/user/images/banner/1_3.jpg" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="single-banner">
                    <a href="#">
                        <img src="<?= ASSETS ?>/user/images/banner/1_4.jpg" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="single-banner">
                    <a href="#">
                        <img src="<?= ASSETS ?>/user/images/banner/1_5.jpg" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
        </div>
        <!-- Single Banner Area End Here -->
    </div>
</div>
<!-- Li's Static Banner Area End Here -->
<!-- Begin Li's Laptop Product Area -->

<?php
foreach ($category as $key => $cate) :
?>
    <section class="product-area li-laptop-product pt-60 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span><?= $cate['title_category'] ?></span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <?php
                            foreach ($product as $key => $pro_cate) {
                                if ($cate['id_category'] == $pro_cate['id_category']) {
                            ?>

                                    <form action="<?= BASE_URL ?>/cart/addCart" method="POST" data>
                                        <input type="hidden" value="<?= $pro_cate['id_product'] ?>" name="product_id">
                                        <input type="hidden" value="<?= $pro_cate['title_product'] ?>" name="product_title">
                                        <input type="hidden" value="<?= $pro_cate['img_product'] ?>" name="product_image">
                                        <input type="hidden" value="<?= $pro_cate['price_product'] ?>" name="product_price">
                                        <input type="hidden" value="1" name="product_quantity">
                                        <div class="col-lg-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_cate['id_product'] ?>">
                                                        <img src="<?= ROOT ?>/uploads/product/<?= $pro_cate['img_product'] ?>" alt="Li's Product Image">
                                                    </a>

                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">

                                                        <h4><a class="product_name" href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_cate['id_product'] ?>"><?= $pro_cate['title_product'] ?></a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price"><?= number_format($pro_cate['price_product'], 0, ',', '.') . 'đ' ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><input type="submit" value="ADD TO CART"></li>
                                                            <li><a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro_cate['id_product'] ?>" ><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                    </form>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
<?php
endforeach
?>
<!-- quick view -->
