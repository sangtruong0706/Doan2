    <?php
    $title_name = "Chưa có sản phẩm";
    foreach ($category_id as $key => $proname) {
        if (isset($proname['title_category'])) {
            $title_name = $proname['title_category'];
        }
    };
    ?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?= BASE_URL ?>">Home</a></li>
                <li><a href="<?=BASE_URL?>/userproduct/paging/1">Sản phẩm</a></li>
                <li class="active"><?=$title_name?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60 pt-sm-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner">
                    <a href="#">
                        <img src="<?= ASSETS ?>/user/images/bg-banner/2.jpg" alt="Li's Static Banner">
                    </a>
                </div>
                <!-- Li's Banner Area End Here -->
                <!-- shop-top-bar start -->

                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    <?php
                                    foreach ($category_id as $key => $pro) :
                                    ?>
                                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                            <!-- single-product-wrap start -->
                                            <form action="<?= BASE_URL ?>/cart/addCart" method="POST" data>
                                                <input type="hidden" value="<?= $pro['id_product'] ?>" name="product_id">
                                                <input type="hidden" value="<?= $pro['title_product'] ?>" name="product_title">
                                                <input type="hidden" value="<?= $pro['img_product'] ?>" name="product_image">
                                                <input type="hidden" value="<?= $pro['price_product'] ?>" name="product_price">
                                                <input type="hidden" value="1" name="product_quantity">
                                                <div class="col-lg-12">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro['id_product'] ?>">
                                                                <img src="<?= ROOT ?>/uploads/product/<?= $pro['img_product'] ?>" alt="Li's Product Image">
                                                            </a>

                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">

                                                                <h4><a class="product_name" href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro['id_product'] ?>"><?= $pro['title_product'] ?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price"><?= number_format($pro['price_product'], 0, ',', '.') . 'đ' ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><input type="submit" value="ADD TO CART"></li>
                                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                            </form>
                                            <!-- single-product-wrap end -->
                                        </div>
                                    <?php
                                    endforeach
                                    ?>

                                </div>
                            </div>
                        </div>

                        <!-- <div class="paginatoin-area">
                            <div class="row">
                                <?php
                                $tmp =0;
                                foreach($product_paging as $key){
                                    $tmp++;
                                }
                                ?>
                                <div class="col-lg-6 col-md-6 pt-xs-15">
                                    <p>Showing of <?=$tmp?> item(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box pt-xs-20 pb-xs-15">
                                        <?php
                                            foreach ($page_num as $key => $pag) {
                                                $current_page = $pag;
                                            }
                                            for ($i = 1; $i <= $page; $i++) {

                                        ?>
                                                <li>
                                                    <a class="<?php if ($i == $current_page) {echo 'active';} ?>" style="<?php if ($i == $current_page) {echo 'background:#ccc;';} ?>" href="<?= BASE_URL ?>/userproduct/paging/<?= $i ?>"><?= $i ?></a>
                                                </li>
                                        <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                    <div class="sidebar-title">
                        <h2>Category Product</h2>
                    </div>
                    <!-- category-sub-menu start -->
                    <div class="category-sub-menu">
                        <ul>
                            <?php
                            foreach ($categoryAll as $key => $value) :
                            ?>
                                <li>
                                    <a href="<?= BASE_URL ?>/userproduct/categoryProduct/<?= $value['id_category'] ?>"><?= $value['title_category'] ?></a>
                                </li>
                            <?php
                            endforeach;
                            ?>

                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                </div>

                <!-- <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
                    <div class="sidebar-title">
                        <h2>TAG</h2>
                    </div>
                    <div class="category-tags">
                        <ul>
                            <li><a href="# ">Devita</a></li>
                            <li><a href="# ">Cameras</a></li>
                            <li><a href="# ">Sony</a></li>
                            <li><a href="# ">Computer</a></li>
                            <li><a href="# ">Big Sale</a></li>
                            <li><a href="# ">Accessories</a></li>
                        </ul>
                    </div>
                  
                </div> -->
            </div>
        </div>
    </div>
</div>