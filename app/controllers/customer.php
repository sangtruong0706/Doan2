<?php
class customer extends DController
{


    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index()
    {
        $this->historyCart();
    }
    public function historyCart()
    {
    }
    public function singUp()
    {
        $name = $_POST['txtHoTen'];
        $phone = $_POST['txtDienThoai'];
        $email = $_POST['txtEmail'];
        $address = $_POST['txtDiaChi'];
        $password = $_POST['txtPassword'];


        $table_customer = 'tbl_customer';
        $data = array(
            'customer_name' => $name,
            'customer_phone' => $phone,
            'customer_email' => $email,
            'customer_address' => $address,
            'customer_password' => $password

        );
        $customerModel = $this->load->model('customerModel');
        $result = $customerModel->singUp($table_customer, $data);
        if ($result == 1) {
            Session::init();
            Session::set('customer_sing', true);
            Session::set('customer_name', $result[0]['customer_name']);
            Session::set('id_customer', $result[0]['id_customer']);
            Session::set('message','Đăng kí tài khoản thành công!!!');
            header("Location:" . BASE_URL . "/customer/login");
        } else {
            $message['msg'] = " Đặt kí thất bại!";
            Session::set('message','Đăng kí tài khoản thất bại!!!');
            header("Location:" . BASE_URL . "/customer/login");
        }
    }
    public function loginCustomer()
    {
        Session::init();
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $table_customer = 'tbl_customer';
        $customerModel = $this->load->model('customerModel');

        $count = $customerModel->login($table_customer, $userName, $password);

        if ($count == 0) {
            Session::set('message','Username or Password không chính xác!!!');
            header("Location:" . BASE_URL . "/customer/login");
        } else {

            $result = $customerModel->getLogin($table_customer, $userName, $password);
            if(isset($_POST['remember_me'])){
                setcookie("user",  $userName, time()+(86400*7));
                setcookie("pass",  $password, time()+(86400*7));
            }

            Session::set('customer', true);
            Session::set('customer_name', $result[0]['customer_name']);
            Session::set('id_customer', $result[0]['id_customer']);

            Session::set('message','Đăng nhập thành công!!!');
            // header("Location:" . BASE_URL . "/cart/cart?msg=" . urldecode(serialize($message)));
            header("Location:" . BASE_URL."/customer/login");
        }
    }
    public function logout()
    {
        Session::init();
        Session::unset('customer');
        $message['msg'] = " Đăng xuất thành công!";
        // header("Location:" . BASE_URL . "/customer/login?msg=" . urldecode(serialize($message)));
        header("Location:" . BASE_URL);
    }
    public function login()
    {
        Session::init();
        $this->load->view('user/header');
        // $this->load->view('user/slider');      
        $this->load->view('user/home/customerLogin');
        $this->load->view('user/footer');
    }
    public function forgotPass()
    {
        Session::init();
        $this->load->view('user/header');
        // $this->load->view('user/slider');      
        $this->load->view('user/home/forgotPass');
        $this->load->view('user/footer');
    }
    public function newPass()
    {
        Session::init();
        if (isset($_POST['gui_yeu_cau'])) {
            $email = $_POST['email'];
        }else {
            $email = '';
        }
        if($email == '') {
            Session::set('message','Vui lòng nhập email!!!');
        }
        $customerModel = $this->load->model('customerModel');
        $table_customer = 'tbl_customer';
        $count = $customerModel->getUser($table_customer, $email);
        if($count==1){
            $title = "update password";
            $newPass = substr(md5(rand(0, 999999)), 0, 8);
            $content = "<p>your new password is:</p> <b>$newPass</b>";
            $sendMail = SendMail::send($title, $content, $email);
    
            $data_update = array(
                'customer_password' => $newPass
            );
            $cond = "$table_customer.customer_email = '$email'";
            $customerModel->updatePass($table_customer, $data_update, $cond); 
            Session::set('message','Đã cấp mật khẩu mới, vui lòng kiểm tra email của bạn!!!');
            header("Location:" . BASE_URL . "/customer/forgotPass");
        }else{
            Session::set('message','Email này chưa đăng kí tài khoản!!!');
            header("Location:" . BASE_URL . "/customer/forgotPass");
        }



    }
}
