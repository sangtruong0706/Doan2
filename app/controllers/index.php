<?php
class index extends DController
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
        Session::init();
    }
    public function index()
    {
        $this->homePage();
    }
    public function homePage()
    {
        $categoryModel = $this->load->model('categoryModel');

        $productModel = $this->load->model('productModel');

        $table = 'tbl_category';

        $tablePro = 'tbl_product';
        $data['category'] = $categoryModel->categoryHome($table);

        $data['product'] = $productModel->listProductIndex($tablePro);
        $data['product_hot'] = $productModel->listProductHot($tablePro);
        $data['product_new'] = $productModel->listProductNew($tablePro);



        $this->load->view('user/header');
        $this->load->view('user/slider');
        $this->load->view('user/home', $data);
        $this->load->view('user/footer');
    }
    public function quickView($id)
    {
        $categoryModel = $this->load->model('categoryModel');

        $productModel = $this->load->model('productModel');

        $table = 'tbl_category';

        $tablePro = 'tbl_product';
        $cond = "$tablePro.id_product='$id'";

        $data['category'] = $categoryModel->categoryHome($table);

        $data['productID'] = $productModel->productID($tablePro, $cond);
        $data['product'] = $productModel->listProductIndex($tablePro);
        $data['product_hot'] = $productModel->listProductHot($tablePro);
        $data['product_new'] = $productModel->listProductNew($tablePro);



        $this->load->view('user/header');
        $this->load->view('user/slider');
        $this->load->view('user/home', $data);
        $this->load->view('user/footer');
    }
    public function notFound()
    {
        $this->load->view('404');
    }

    public function contact()
    {
        $this->load->view('user/header');
        $this->load->view('user/home/contact');
        $this->load->view('user/footer');
    }
    public function aboutUs()
    {
        $this->load->view('user/header');
        $this->load->view('user/home/aboutUs');
        $this->load->view('user/footer');
    }
    public function Search()
    {
        $categoryModel = $this->load->model('categoryModel');
        $tableCate = 'tbl_category';
        $data['categoryAll'] = $categoryModel->category($tableCate);
        $homeModel = $this->load->model('homeModel');
        if (isset($_GET['search'])) {
            $key = $_GET['key_search'];
        }
        $tablePro = 'tbl_product';
        $cond = "$tablePro.title_product LIKE '%$key%'";
        $data['result_search'] = $homeModel->Search($tablePro, $cond);
        $this->load->view('user/header');
        $this->load->view('user/home/search', $data);
        $this->load->view('user/footer');
    }
}
