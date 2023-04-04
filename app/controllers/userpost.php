<?php
    class userpost extends DController{
        public function __construct()
        {
            $data = array();
            parent::__construct();
            Session::init();
        }
        public function index(){
            $this->allPost();
        }
        public function allPost(){
            $postModel = $this->load->model('postModel');
            $tableCatePost = 'tbl_category_post';
            $tablePost = 'tbl_post';

            $data['category_post'] = $postModel->categoryPostHome($tableCatePost);
            $data['all_post'] = $postModel->allPost($tablePost);
            $this->load->view('user/header');
            // $this->load->view('user/slider');      
            $this->load->view('user/post/allPost', $data);
            $this->load->view('user/footer');
        }
        public function category($id){
            $postModel = $this->load->model('postModel');
            $tableCatePost = 'tbl_category_post';
            $tablePost = 'tbl_post';
            $data['category_post'] = $postModel->categoryPostHome($tableCatePost);
            $data['category_post_id'] = $postModel->categoryPostIDHome($tablePost, $tableCatePost, $id);
            $this->load->view('user/header', $data);
            // $this->load->view('user/slider');      
            $this->load->view('user/post/categoryPost', $data);
            $this->load->view('user/footer');
        }
        public function detailPost($id){
            $postModel = $this->load->model('postModel');

            $tableCatePost = 'tbl_category_post';
            $tablePost = 'tbl_post';

            $cond = " $tableCatePost.id_category_post = $tablePost.id_category_post AND $tablePost.id_post='$id' ";

            $data['category_post'] = $postModel->categoryPostHome($tableCatePost);
            $data['detail_post'] = $postModel->detailPostHome($tableCatePost, $tablePost, $cond);
            $this->load->view('user/header');         
            $this->load->view('user/post/detailPost', $data);
            $this->load->view('user/footer');
        }
       

    }
?>