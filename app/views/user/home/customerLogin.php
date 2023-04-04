<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;" >' . $value . '</span>';
    }
}
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Login Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="<?= BASE_URL ?>/customer/loginCustomer" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Email Address*</label>
                                <input class="mb-0" type="email" placeholder="Email Address" name="username">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Password</label>
                                <input class="mb-0" type="password" placeholder="Password" name="password" >
                            </div>
                            <div class="col-md-8">
                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                <a href="#"> Forgotten pasward?</a>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="register-button mt-0">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end login form -->
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="<?= BASE_URL ?>/customer/singUp" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-20">
                                <label>Full Name</label>
                                <input name="txtHoTen" class="mb-0" type="text" placeholder="Full Name">
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>Phone Number</label>
                                <input name="txtDienThoai" class="mb-0" type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email Address*</label>
                                <input name="txtEmail" class="mb-0" type="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Address</label>
                                <input name="txtDiaChi" class="mb-0" type="text" placeholder=" Address">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Password</label>
                                <input name="txtPassword" class="mb-0" type="password" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" name="singup" class="register-button mt-0">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end sin -->
        </div>
    </div>
</div>