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
                <div class="step current"> <span><a href="#">Vận chuyển</a></span> </div>
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

            </div>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<?php
if (isset($_SESSION['customer']) && isset($_SESSION['shopping_cart']) && !empty($info_ship)) {
    foreach ($info_ship as $key => $value) {
?>
        <!-- info shipping -->
        <div class="container">
            <div class="col-lg-12 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content pt-sm-55 pt-xs-55">
                    <!-- <h3 style="margin-top: 10px;" class="contact-page-title">Information Shipping</h3>
                    <div class="contact-form">
                        <form action="<?= BASE_URL ?>/cart/handlingShipping/<?php if (isset($_SESSION['id_customer'])) {
                                                                                echo $_SESSION['id_customer'];
                                                                            } else {
                                                                                echo '';
                                                                            } ?>" method="POST">
                            <div class="form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input type="text" id="customername" required name="name" value="<?= $value['name'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Phone Number <span class="required">*</span></label>
                                <input type="text" id="customerEmail" required name="phone" value="<?= $value['phone'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" id="contactSubject" name="address" value="<?= $value['address'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="contactSubject" name="email" value="<?= $value['email'] ?>">
                            </div>
                            <div class="form-group mb-30">
                                <label>Note</label>
                                <textarea style="resize: none;" rows="1" id="contactMessage" name="note"><?= $value['note'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <?php
                                if ($value['name'] == '' && $value['phone'] == '') {
                                ?>
                                    <button type="submit" name="add_transport" id="submit" class="li-btn-3">Add shipping information</button>
                                <?php
                                } else {
                                ?>
                                    <button type="submit" name="update_transport" id="submit" class="li-btn-3">
                                        <input type="hidden" name="id_ship" value="<?= $value['id_shipping'] ?>">
                                        Update shipping information
                                    </button>
                                <?php
                                }
                                ?>
                            </div>
                        </form>
                    </div> -->
                    <ul class="hm-menu">
                        <!-- Begin Header Mini Cart Area -->
                        <li class="hm-minicart">
                            <div class="hm-minicart-trigger dropdown" title="Click to view ">
                                Information Shipping <i class="bi bi-chevron-down"></i>
                            </div>
                            <span></span>
                            <div class="minicart cart_info">
                                <form action="<?= BASE_URL ?>/cart/handlingShipping/<?php if (isset($_SESSION['id_customer'])) {
                                                                                        echo $_SESSION['id_customer'];
                                                                                    } else {
                                                                                        echo '';
                                                                                    } ?>" method="POST">
                                    <div class="form-group">
                                        <label>Your Name <span class="required">*</span></label>
                                        <input type="text" id="customername" required name="name" value="<?= $value['name'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number <span class="required">*</span></label>
                                        <input type="text" id="customerEmail" required name="phone" value="<?= $value['phone'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" id="contactSubject" name="address" value="<?= $value['address'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" id="contactSubject" name="email" value="<?= $value['email'] ?>">
                                    </div>
                                    <div class="form-group mb-30">
                                        <label>Note</label>
                                        <textarea style="resize: none;" rows="1" id="contactMessage" name="note"><?= $value['note'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        if ($value['name'] == '' && $value['phone'] == '') {
                                        ?>
                                            <button type="submit" name="add_transport" id="submit" class="li-btn-3">Add shipping information</button>
                                        <?php
                                        } else {
                                        ?>
                                            <button type="submit" name="update_transport" id="submit" class="add-transport">
                                                <input type="hidden" name="id_ship" value="<?= $value['id_shipping'] ?>">
                                                Update shipping information
                                            </button>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Header Mini Cart Area End Here -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- cart -->
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
                        <div class="row">
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
                        </div>

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
    <?php
    }
    ?>

<?php
} else if (isset($_SESSION['customer']) && isset($_SESSION['shopping_cart']) && empty($info_ship)) {
?>

    <div class="container">
        <div class="col-lg-12 col-md-12 order-2 order-lg-1">
            <div class="contact-form-content pt-sm-55 pt-xs-55">
                <ul class="hm-menu">
                    <!-- Begin Header Mini Cart Area -->
                    <li class="hm-minicart">
                        <div class="hm-minicart-trigger dropdown" title="Click to view ">
                            Information Shipping <i class="bi bi-chevron-down"></i>
                        </div>
                        <span></span>
                        <div class="minicart cart_info">
                            <form action="<?= BASE_URL ?>/cart/handlingShipping/<?php if (isset($_SESSION['id_customer'])) {
                                                                                    echo $_SESSION['id_customer'];
                                                                                } else {
                                                                                    echo '';
                                                                                } ?>" method="POST">
                                <div class="form-group">
                                    <label>Your Name <span class="required">*</span></label>
                                    <input type="text" id="customername" required name="name">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number <span class="required">*</span></label>
                                    <input type="text" id="customerEmail" required name="phone">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" id="contactSubject" name="address">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" id="contactSubject" name="email">
                                </div>
                                <div class="form-group mb-30">
                                    <label>Note</label>
                                    <textarea style="resize: none;" rows="1" id="contactMessage" name="note"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="add_transport" id="submit" class="li-btn-3">Add shipping information</button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- Header Mini Cart Area End Here -->
                </ul>
            </div>
        </div>
    </div>
    <!-- cart -->
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
                    <div class="row">
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
                    </div>

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

<?php
} else{
?>
     <div class="container">
        <div class="cart-empty">
            <img src="<?=ASSETS?>/user/images/cart-empty.png" title="Cart Empty" alt="">
        </div>
    </div>
<?php
}
?>