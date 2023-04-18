<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?= BASE_URL ?>">Home</a></li>
                <li class="active">Sản phẩm</li>
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
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing 1 to 9 of 15</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sort By:</p>
                            <select class="nice-select">
                                <option value="trending">Relevance</option>
                                <option value="sales">Name (A - Z)</option>
                                <option value="sales">Name (Z - A)</option>
                                <option value="rating"><a href="<?=BASE_URL?>/userproduct/sortbyPrice">Price (Low &gt; High)</a></option>
                            </select>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    <?php
                                    foreach ($productByPrice as $key => $pro) :
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
                                                                    <li>
                                                                        <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro['id_product'] ?>">
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
                                            <!-- single-product-wrap end -->
                                        </div>
                                    <?php
                                    endforeach
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    <?php
                                    foreach ($productByPrice as $key => $pro) :
                                    ?>
                                        <form action="<?= BASE_URL ?>/cart/addCart" method="POST" data>
                                            <input type="hidden" value="<?= $pro['id_product'] ?>" name="product_id">
                                            <input type="hidden" value="<?= $pro['title_product'] ?>" name="product_title">
                                            <input type="hidden" value="<?= $pro['img_product'] ?>" name="product_image">
                                            <input type="hidden" value="<?= $pro['price_product'] ?>" name="product_price">
                                            <input type="hidden" value="1" name="product_quantity">
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-5 ">
                                                    <div class="product-image img-height">
                                                        <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro['id_product'] ?>">
                                                            <img src="<?= ROOT ?>/uploads/product/<?= $pro['img_product'] ?>" alt="Li's Product Image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-7">
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <h4><a class="product_name" href="<?= BASE_URL ?>/userproduct/detailProduct/<?= $pro['id_product'] ?>"><?= $pro['title_product'] ?></a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price"><?= number_format($pro['price_product'], 0, ',', '.') . 'đ' ?></span>
                                                            </div>
                                                            <p><?= $pro['desc_product'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="shop-add-action mb-xs-30">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><input type="submit" value="ADD TO CART"></li>
                                                            <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Quick view</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php
                                    endforeach
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <?php
                                $tmp = 0;
                                foreach ($product_paging as $key) {
                                    $tmp++;
                                }
                                ?>
                                <div class="col-lg-6 col-md-6 pt-xs-15">
                                    <p>Showing of <?= $tmp ?> item(s)</p>
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
                                                <a class="<?php if ($i == $current_page) {
                                                                echo 'active';
                                                            } ?>" style="<?php if ($i == $current_page) {
                                                                                echo 'background:#ccc;';
                                                                            } ?>" href="<?= BASE_URL ?>/userproduct/paging/<?= $i ?>"><?= $i ?></a>
                                            </li>
                                        <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
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