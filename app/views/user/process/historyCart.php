
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">History Cart</li>
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
                <div class="step current complete"> <span><a href="<?= BASE_URL ?>/cart/infoPay/<?php if (isset($_SESSION['id_customer'])) {
                                                                                                        echo $_SESSION['id_customer'];
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    } ?>">Thanh toán</a></span> </div>
                <div class="step "> <span><a href="<?= BASE_URL ?>/cart/historyCart/<?php if (isset($_SESSION['id_customer'])) {
                                                                                        echo $_SESSION['id_customer'];
                                                                                    } else {
                                                                                        echo '';
                                                                                    } ?>">Lịch sử mua hàng</a><span> </div>

            </div>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="card" style="font-size: 18px;">
        <div class="card-body">
            <h5 class="card-title">Lịch sử mua hàng</h5>

            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Hình thức thanh toán</th>
                        <th scope="col">Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt = 1;
                    foreach ($history_cart as $key => $value) {
                    ?>
                        <tr>
                            <th scope="row"><?= $stt ?></th>
                            <td><?= $value['order_code'] ?></td>
                            <td><?= $value['order_date'] ?></td>
                            <td>
                                <?php if ($value['order_status'] == 0) {
                                    echo 'Đang chờ xử lý';
                                } else {
                                    echo "Đơn hàng đã được xử lý";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($value['order_payment'] == 'vnpay') {
                                ?>
                                    <a href="<?= BASE_URL ?>/cart/detailPayment/<?= $value['order_code'] ?>"><?= $value['order_payment'] ?></a>
                                <?php
                                } else if($value['order_payment'] == 'tienmat'){
                                    echo 'Thanh toán bằng tiền mặt';
                                }
                                ?>


                            </td>
                            <td>
                                <a href="<?= BASE_URL ?>/cart/detailCart/<?= $value['order_code'] ?>">Xem chi tiết</a>

                            </td>
                        </tr>
                    <?php
                        $stt++;
                    }
                    ?>

                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
</div>
