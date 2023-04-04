<?php
foreach ($detail_product as $key => $value) {
    $namepro = $value['title_product'];
    $catepro = $value['title_category'];
    $id = $value['id_category'];
}
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?= BASE_URL ?>">Home</a></li>
                <li><a href="<?= BASE_URL ?>/userproduct/categoryProduct/<?=$id?>"><?= $catepro ?></a></li>
                <li class="active"><?= $namepro ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->

<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <?php
        foreach ($detail_product as $key => $detail) :
        ?>
            <form action="<?= BASE_URL ?>/cart/addCart" method="POST" data>
                <input type="hidden" value="<?= $detail['id_product'] ?>" name="product_id">
                <input type="hidden" value="<?= $detail['title_product'] ?>" name="product_title">
                <input type="hidden" value="<?= $detail['img_product'] ?>" name="product_image">
                <input type="hidden" value="<?= $detail['price_product'] ?>" name="product_price">
                <input type="hidden" value="1" name="product_quantity">
                <div class="row single-product-area">
                    <div class="col-lg-5 col-md-6">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-navigation-1">
                                <div class="lg-image">
                                    <a class=" vbox-item" href="#" data-gall="myGallery">
                                        <img src="<?= ROOT ?>/uploads/product/<?= $detail['img_product'] ?>" alt="product image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--// Product Details Left -->
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="product-details-view-content pt-60">
                            <div class="product-info">
                                <h2><?= $detail['title_product'] ?></h2>
                                <div class="price-box pt-20">
                                    <span class="new-price new-price-2"><?= number_format($detail['price_product'], 0, ',', '.') . 'vnđ' ?></span>
                                </div>
                                <div class="product-desc">
                                    <p>
                                        <span><?= $detail['desc_product'] ?>
                                        </span>
                                    </p>
                                </div>
                                <div class="single-add-to-cart">
                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        <?php
        endforeach
        ?>

    </div>
</div>
<!-- content-wraper end -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Sản phẩm liên quan:</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        <?php
                        foreach ($related_product as $key => $relate) :
                        ?>
                            <form action="<?= BASE_URL ?>/cart/addCart" method="POST" data>
                                <input type="hidden" value="<?= $relate['id_product'] ?>" name="product_id">
                                <input type="hidden" value="<?= $relate['title_product'] ?>" name="product_title">
                                <input type="hidden" value="<?= $relate['img_product'] ?>" name="product_image">
                                <input type="hidden" value="<?= $relate['price_product'] ?>" name="product_price">
                                <input type="hidden" value="1" name="product_quantity">
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $relate['id_product'] ?>">
                                                <img src="<?= ROOT ?>/uploads/product/<?= $relate['img_product'] ?>" alt="Li's Product Image">
                                            </a>

                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">

                                                <h4><a class="product_name" href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $relate['id_product'] ?>"><?= $relate['title_product'] ?></a></h4>
                                                <div class="price-box">
                                                    <span class="new-price"><?= number_format($relate['price_product'], 0, ',', '.') . 'đ' ?></span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><input type="submit" value="ADD TO CART"></li>
                                                    <li><a href="<?= BASE_URL ?>/userproduct/quickView/<?= $relate['id_product'] ?>" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </form>
                        <?php
                        endforeach
                        ?>

                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Laptop Product Area End Here -->
<!-- Begin Footer Area -->
<!-- Begin Quick View | Modal Area -->
<div class="modal fade modal-wrapper" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <?php
        foreach ($quickView as $key => $quick_view) :
        ?>
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <a class=" vbox-item" href="#" data-gall="myGallery">
                                            <img src="<?= ROOT ?>/uploads/product/<?= $quick_view['img_product'] ?>" alt="product image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2><?= $quick_view['title_product'] ?></h2>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2"><?= number_format($quick_view['price_product'], 0, ',', '.') . 'vnđ' ?></span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span><?= $quick_view['desc_product'] ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="product-variants">
                                        <div class="produt-variants-size">
                                            <label>Dimension</label>
                                            <select class="nice-select">
                                                <option value="1" title="S" selected="selected">40x60cm</option>
                                                <option value="2" title="M">60x90cm</option>
                                                <option value="3" title="L">80x120cm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="#" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <p>Security policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-truck"></i>
                                                    </div>
                                                    <p>Delivery policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-exchange"></i>
                                                    </div>
                                                    <p> Return policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endforeach
        ?>
    </div>
</div>
<!-- Quick View | Modal Area End Here -->