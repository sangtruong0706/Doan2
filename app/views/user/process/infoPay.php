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
                <div class="step current complete"> <span> <a href="<?= BASE_URL ?>/cart/cart">Giỏ hàng</a></span> </div>
                <div class="step current complete"> <span><a href="<?= BASE_URL ?>/cart/transport/<?php if (isset($_SESSION['id_customer'])) {
                                                                                                echo $_SESSION['id_customer'];
                                                                                            } else {
                                                                                                echo '';
                                                                                            } ?>">Vận chuyển</a></span> </div>
                <div class="step current"> <span><a href="#">Thanh toán</a><span> </div>
                <div class="step"> <span><a href="<?= BASE_URL ?>/cart/historyCart/<?php if (isset($_SESSION['id_customer'])) {
                                                                                        echo $_SESSION['id_customer'];
                                                                                    } else {
                                                                                        echo '';
                                                                                    } ?>">Lịch sử mua hàng</a><span> </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php
    if (isset($_SESSION['customer']) && isset($_SESSION['shopping_cart'])) {
        $total = 0;
        if (isset($_SESSION['shopping_cart'])) {
            foreach ($_SESSION['shopping_cart'] as $key => $cus) {
                $sub_total = $cus['product_price'] * $cus['product_quantity'];
                $total += $sub_total;
            }
        }
        foreach ($info_ship as $key => $value) {

    ?>
            <form class="form_infopay" action="<?= BASE_URL ?>/cart/checkOut/<?php if (isset($_SESSION['id_customer'])) {
                                                            echo $_SESSION['id_customer'];
                                                        } else {
                                                            echo '';
                                                        } ?>" method="POST">
                <div class="row my-4">
                    <div class="col-lg-6 col-md-12">
                        <h4 class="my-3">Information Shipping</h4>
                        <ul class="list-group" style="font-size: 18px;">
                            <li class="list-group-item"  >
                                <span>Name: <b><?= $value['name'] ?></b></span>
                                <input type="hidden" name="name" value="<?= $value['name'] ?>">
                            </li>
                            <li class="list-group-item"  >
                                <span>Phone number: <b><?= $value['phone'] ?></b></span>
                                <input type="hidden" name="phone" value="<?= $value['phone'] ?>">
                            </li>
                            <li class="list-group-item"  >
                                <span>Address: <b><?= $value['address'] ?></b></span>
                                <input type="hidden" name="address" value="<?= $value['address'] ?>">
                            </li>
                            <li class="list-group-item"  >
                                <span>Email: <b><?= $value['email'] ?></b></span>
                                <input type="hidden" name="email" value="<?= $value['email'] ?>">
                            </li>
                            <li class="list-group-item"  >
                                <span>Note: <b><?= $value['note'] ?></b></span>
                                <input type="hidden" name="note" value="<?= $value['note'] ?>">
                            </li>

                        </ul>
                    </div>
                    <!-- end info -->
                    <div class="col-lg-6 col-md-12">

                        <h4 class="my-3">Payment Method</h4>
                        <div class="radio-group">
                            <label for="radio">
                                <input id="radio"  type="radio" name="payment" value="tienmat" >
                                tiền mặt
                                <span></span>
                            </label>
                        </div>
                        <div class="radio-group">
                            <label >
                                <input  type="radio" name="payment" value="chuyenkhoan" >
                                chuyển khoản
                                <span></span>
                            </label>
                        </div>
                        <div class="radio-group">
                            <label >
                                <input  type="radio" name="payment" value="momo" >
                                mommo
                                <span></span>
                            </label>
                        </div>
                        <div class="radio-group">
                            <label >
                                <input  type="radio" name="payment" value="vnpay" >
                                vn pay
                                <span></span>
                            </label>
                        </div>
                        <div class="row price-total ">
                            <div class="price_">
                                <p >Tổng tiền cần thanh toán: <?= number_format($total, 0, ',', '.') . 'đ'  ?></p>
                            </div>
                            <div class="btn_">
                                <button type="submit" name="redirect" id="redirect" class="btn-checkout" >Thanh toán ngay</button>
                            </div>
                        </div>
                        
                        

                    </div>
                </div>
            
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
                                            </tr>
                                        </thead>
                                        <?php
                                        if (isset($_SESSION['shopping_cart'])) {
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
                                                            <td class="li-product-name"><a href="#"><?= $value['product_title'] ?></a></td>
                                                            <td class="li-product-price"><span class=""><?= number_format($value['product_price'], 0, ',', '.') . 'đ' ?></span></td>
                                                            <td class="quantity">
                                                                <span style="margin: 0 5px;"><?= $value['product_quantity'] ?></span>
                                                            </td>
                                                            <td class="product-subtotal"><span class="amount"><?= number_format($sub_total, 0, ',', '.') . 'đ' ?></span></td>
                                                        </tr>
                                                    </tbody>
                                                <?php
                                                }
                                                ?>
                                    </table>
                                </div>

                                </form>
                                <!-- <div class="row">
                                    <div class="col-md-5 ml-auto my-5">
                                        <a href="<?= BASE_URL ?>">Tiếp tục mua hàng</a>
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
                                                <a href="<?= BASE_URL ?>/cart/infoPay/<?php if (isset($_SESSION['id_customer'])) {
                                                                                            echo $_SESSION['id_customer'];
                                                                                        } else {
                                                                                            echo '';
                                                                                        } ?>">Checkout</a>
                                            <?php
                                            } else {
                                            ?>
                                                <a href="<?= BASE_URL ?>/customer/login">Login To Checkout</a>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div> -->

                            <?php
                                        } else {
                            ?>
                                <tr>
                                    <td colspan="7">
                                        <div class="sum_price_all">
                                            <span class="text_price">Giỏ hàng trống!!</span> <br>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                        }
                            ?>


                            </div>
                        </div>
                    </div>
                </div>
            </form>

        <?php
        }
        ?>


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