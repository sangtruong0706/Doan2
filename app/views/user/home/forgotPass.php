<div class="container forgot_pass">
    <div class="row">
        <?php
        if(Session::get('message') && Session::get('message')=='Email này chưa đăng kí tài khoản!!!' || Session::get('message')=='Vui lòng nhập email!!!') {
            $color = 'warning';
        }else{
            $color = 'success';
        }
        check_noti($color);
        ?>
    </div>
    <div class="row">
        <form action="<?= BASE_URL ?>/customer/newPass" method="POST">
            <h4>Bạn cần nhập địa chỉ email để chúng tôi cấp lại mật khẩu</h4>
            <input type="text" name="email" placeholder="Nhập email">
            <button type="submit" name="gui_yeu_cau" class="add-transport">Gửi yêu cầu</button>
            <div class="container text_noti">
                <div class="row">
                    <div> You have an account: <a href="<?=BASE_URL?>/customer/login">Login</a></div>
                </div>
                <div class="row">
                    <div>You not have an account: <a href="<?=BASE_URL?>/customer/login">Singup</a></div>
                </div>
            </div>
        </form>
    </div>
</div>