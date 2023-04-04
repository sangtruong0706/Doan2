<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?=BASE_URL?>">Home</a></li>
                <li class="active">Tin tức</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page pt-60 pb-55">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Blog Sidebar Area -->
            <div class="col-lg-3 order-lg-1 order-2">
                <div class="li-blog-sidebar-wrapper">
                    <div class="li-blog-sidebar">
                        <div class="li-sidebar-search-form pt-xs-30 pt-sm-30">
                            <form action="#">
                                <input type="text" class="li-search-field" placeholder="search here">
                                <button type="submit" class="li-search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="li-blog-sidebar pt-25">
                        <h4 class="li-blog-sidebar-title">Categories Post</h4>
                        <ul class="li-blog-archive">
                            <?php
                            foreach ($category_post as $key=>$value) :
                            ?>
                                <li>
                                    <a href="<?= BASE_URL ?>/userpost/category/<?= $value['id_category_post'] ?>"><?=$value['title_category_post']?></a>
                                </li>                               
                            <?php
                            endforeach;
                            ?>

                        </ul>
                    </div>             
                </div>
            </div>
            <!-- Li's Blog Sidebar Area End Here -->
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="row li-main-content">
                <?php 
                    foreach ($all_post as $key=>$post):
                                
                ?>
                    <div class="col-lg-12">
                        <div class="li-blog-single-item mb-30">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="li-blog-banner">
                                        <a href="<?= BASE_URL ?>/userpost/detailPost/<?=$post['id_post']?>">
                                            <img class="img-full img-post" src="<?= ROOT ?>/uploads/post/<?=$post['img_post']?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="li-blog-content">
                                        <div class="li-blog-details">
                                            <h3 class="li-blog-heading pt-xs-25 pt-sm-25">
                                                <a href="<?= BASE_URL ?>/userpost/detailPost/<?=$post['id_post']?>"><?=$post['title_post']?></a>
                                            </h3>
                                            <p><?=$post['desc_post']?></p>
                                            <a class="read-more" href="<?= BASE_URL ?>/userpost/detailPost/<?=$post['id_post']?>">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                <?php
                endforeach;
                ?>
                    <!-- Begin Li's Pagination Area -->
                    <div class="col-lg-12">
                        <div class="li-paginatoin-area text-center pt-25">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="li-pagination-box">
                                        <li><a class="Previous" href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="Next" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Pagination End Here Area -->
                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>