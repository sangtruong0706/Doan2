<section>
    <div class="container">
        <div class="card" style="font-size: 18px;">
            <div class="card-body">
                <h5 class="card-title">Chi tiết thanh toán vnpay</h5>

                <!-- Default Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="row">Số tiền</th>
                            <th scope="row">Mã ngân hàng</th>
                            <th scope="row">vnp_banktranno</th>
                            <th scope="row">Chi tiết </th>
                            <th scope="row">vnp_paydate</th>
                            <!-- <th scope="row">Mã Website</th> -->
                            <th scope="row">Mã giao dịch</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php
                        foreach ($detail_vnpay as $key => $vnpay) {
                        ?>
                            <tr>
                                <td><?= number_format($vnpay['vnp_amount'], 0, ',', '.') . 'đ' ?></td>
                                <td><?= $vnpay['vnp_bankcode'] ?></td>
                                <td><?= $vnpay['vnp_banktranno'] ?></td>
                                <td><?= $vnpay['vnp_orderinfo'] ?></td>
                                <td><?= $vnpay['vnp_paydate'] ?></td>
                                <!-- <td><?= $vnpay['vnp_tmncode'] ?></td> -->
                                <td><?= $vnpay['vnp_transactionno'] ?></td>
                                
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    </div>
</section>