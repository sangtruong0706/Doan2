<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="wrapper">
            <div class="arrow-steps clearfix">
                <div class="step current"> <span> <a href="#">Giỏ hàng</a></span> </div>
                <?php
                if (isset($_SESSION['customer'])) {
                ?>
                    <div class="step"> <span><a href="<?= BASE_URL ?>/cart/transport/<?php if (isset($_SESSION['id_customer'])) {
                                                                                            echo $_SESSION['id_customer'];
                                                                                        } else {
                                                                                            echo '';
                                                                                        } ?>">Vận chuyển</a></span> </div>
                    <div class="step"> <span><a href="<?= BASE_URL ?>/cart/infoPay/<?php if (isset($_SESSION['id_customer'])) {
                                                                                        echo $_SESSION['id_customer'];
                                                                                    } else {
                                                                                        echo '';
                                                                                    } ?>">Thanh toán</a><span> </div>
                    <div class="step"> <span><a href="<?= BASE_URL ?>/cart/historyCart/<?php if (isset($_SESSION['id_customer'])) {
                                                                                            echo $_SESSION['id_customer'];
                                                                                        } else {
                                                                                            echo '';
                                                                                        } ?>">Lịch sử mua hàng</a><span> </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60" style="padding-top: 30px !important;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="li-product-thumbnail">hình ảnh</th>
                                <th class="cart-product-name">tên sản phẩm</th>
                                <th class="li-product-price">giá</th>
                                <th class="li-product-quantity">số lượng</th>
                                <th class="li-product-subtotal">thành tiền</th>
                                <th class="li-product-remove">remove</th>
                            </tr>
                        </thead>
                        <?php
                        if (isset($_SESSION['shopping_cart']) && $_SESSION['shopping_cart'] != '') {
                        ?>
                            <form action="<?= BASE_URL ?>/cart/updateCart" method="POST">
                                <?php
                                $total = 0;
                                $cart = $_SESSION['shopping_cart'];
                                foreach ($cart as $key => $value) {
                                    $sub_total = $value['product_price'] * $value['product_quantity'];
                                    $total += $sub_total;
                                ?>
                                    <tbody>

                                        <tr>
                                            <td class="li-product-thumbnail"><a href="#"><img src="<?= ROOT ?>/uploads/product/<?= $value['product_image'] ?>" alt="Li's Product Image"></a></td>
                                            <td style="max-width: 350px;" class="li-product-name"><a href="#"><?= $value['product_title'] ?></a></td>
                                            <td class="li-product-price"><span class=""><?= number_format($value['product_price'], 0, ',', '.') . 'đ' ?></span></td>
                                            <td class="quantity">
                                                <button class="btn btn-sm " type="submit" value="<?= $value['product_quantity'] ?>" name="qty_minus[<?= $value['product_id'] ?>]"><i class="bi bi-dash"></i></button>
                                                <span style="margin: 0 5px;"><?= $value['product_quantity'] ?></span>
                                                <button class="btn btn-sm " type="submit" value="<?= $value['product_quantity'] ?>" name="qty_plus[<?= $value['product_id'] ?>]"><i class="bi bi-plus"></i></button>
                                            </td>
                                            <td class="product-subtotal"><span class="amount"><?= number_format($sub_total, 0, ',', '.') . 'đ' ?></span></td>
                                            <td class="li-product-remove">
                                                <!-- <a href="#"><i class="fa fa-times"></i></a> -->
                                                <button style=" background: transparent;" class="btn btn-sm" type="submit" value="<?= $value['product_id'] ?>" name="delete_cart"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php
                                }
                                ?>
                    </table>
                </div>


                </form>
                <div class="row">
                    <div class="col-md-5 ml-auto my-5">
                        <!-- <button class="continues"><a  href="<?= BASE_URL ?>/userproduct/paging/1"><i class="bi bi-arrow-left"></i> Tiếp tục mua hàng</a></button> -->
                        <a class="continues" href="<?= BASE_URL ?>/userproduct/paging/1"><i class="bi bi-arrow-left"></i> Tiếp tục mua hàng</a>
                        
                    </div>
                    <div class="col-md-5 ml-auto">
                        <div class="cart-page-total">
                            <h2>Cart totals</h2>
                            <ul>
                                <li>Total <span><?= number_format($total, 0, ',', '.') . 'đ' ?></span></li>
                            </ul>
                            <?php
                            if (isset($_SESSION['customer'])) {
                            ?>
                                <a href="<?= BASE_URL ?>/cart/transport/<?= $_SESSION['id_customer'] ?>">Checkout</a>
                            <?php
                            } else {
                            ?>
                                <a href="<?= BASE_URL ?>/customer/login">Login To Checkout</a>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>

            <?php
                        } else {
            ?>


                <div class="container">
                    <div class="cart-empty">
                        <img src="<?=ASSETS?>/user/images/cart-empty.png" title="Cart Empty" alt="">
                    </div>
                </div>


            <?php
                        }
            ?>


            </div>
        </div>
    </div>
</div>