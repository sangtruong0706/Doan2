<?php
class userproduct extends DController
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
        Session::init();
    }
    public function index($page_num)
    {
        $this->paging($page_num);
    }
    public function paging($page_num)
    {
        if ($page_num == '' || $page_num == '1') {
            $offset = '0';
        } else {
            $offset = ($page_num * 6) - 6;
        }
        // echo $offset; exit;
        $categoryModel = $this->load->model('categoryModel');
        $productModel = $this->load->model('productModel');

        $tableCate = 'tbl_category';
        $tablePro = 'tbl_product';

        $data['page_num'] = array(
            'page' => $page_num
        );
        $data['category'] = $categoryModel->categoryHome($tableCate);
        $data['categoryAll'] = $categoryModel->category($tableCate);


        $data['product_paging'] = $productModel->countProduct($tablePro); // đếm tổng số product để phân trang
        // $data['product_total'] = $productModel->countProduct($tablePro);
        $data['all_product'] = $productModel->productPaging($tablePro, $offset);

        $row_count = count($data['product_paging']);
        $page = ceil($row_count / 6);
        $data['page'] = $page;
        $this->load->view('user/header');
        $this->load->view('user/product/pagingProduct', $data);
        $this->load->view('user/footer');
    }
    public function categoryProduct($id)
    {
        // $this->load->view('user/slider');  
        $categoryModel = $this->load->model('categoryModel');

        $tableCate = 'tbl_category';
        $tablePro = 'tbl_product';


        $data['category'] = $categoryModel->categoryHome($tableCate);
        $data['categoryAll'] = $categoryModel->category($tableCate);
        $data['category_id'] = $categoryModel->categoryIDHome($tableCate, $tablePro, $id);


        $this->load->view('user/header', $data);
        $this->load->view('user/product/categoryProduct', $data);
        $this->load->view('user/footer');
    }
    public function detailProduct($id)
    {
        $categoryModel = $this->load->model('categoryModel');
        $productModel = $this->load->model('productModel');


        $tableCate = 'tbl_category';

        $tablePro = 'tbl_product';


        $data['category'] = $categoryModel->categoryHome($tableCate);

        $data['detail_product'] = $productModel->detailProductHome($tableCate, $tablePro, $id);
        // $data['quickView'] = $productModel->quickViewProduct($tableCate, $tablePro, $id);
        foreach ($data['detail_product'] as $key => $value) {
            $id_cate = $value['id_category'];
        }
        $cond = " $tableCate.id_category=$tablePro.id_category AND $tableCate.id_category='$id_cate' AND $tablePro.id_product NOT IN($id)";
        $data['related_product'] = $productModel->relatedProductHome($tableCate, $tablePro, $cond);

        $this->load->view('user/header');
        // $this->load->view('user/slider');      
        $this->load->view('user/product/detailProduct', $data);
        $this->load->view('user/footer');
    }
    public function sortbyPrice()
    {
        // $this->load->view('user/slider');  
        $categoryModel = $this->load->model('categoryModel');
        $productModel = $this->load->model('productModel');
        $tableCate = 'tbl_category';
        $tablePro = 'tbl_product';


        $data['category'] = $categoryModel->categoryHome($tableCate);
        $data['categoryAll'] = $categoryModel->category($tableCate);
        $data['productByPrice'] = $productModel->product_by_price($tablePro);



        $this->load->view('user/header', $data);
        $this->load->view('user/product/product_sort', $data);
        $this->load->view('user/footer');
    }
    // public function quickView($id)
    // {
    //     $productModel = $this->load->model('productModel');
    //     $tableCate = 'tbl_category';
    //     $tablePro = 'tbl_product';

    //     $data['detail_product'] = $productModel->detailProductHome($tableCate, $tablePro, $id);
    //     foreach ($data['detail_product'] as $key => $value) {
    //         $id_cate = $value['id_category'];
    //     }
    //     $cond = " $tableCate.id_category=$tablePro.id_category AND $tableCate.id_category='$id_cate' AND $tablePro.id_product NOT IN($id)";
    //     $data['related_product'] = $productModel->relatedProductHome($tableCate, $tablePro, $cond);
    //     $data['quickView'] = $productModel->quickViewProduct($tablePro, $id);
    //     $this->load->view('user/header');
    //     // $this->load->view('user/slider');      
    //     $this->load->view('user/product/detailProduct', $data);
    //     $this->load->view('user/footer');
    // }
}
