<?php
foreach ($detail_post as $key => $pos) {
    $name_breadcrumb = $pos['title_category_post'];
}
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?=BASE_URL?>">Home</a></li>
                <li><a href="<?=BASE_URL?>/userpost">Tin tức</a></li>
                <li class="active"><?=$name_breadcrumb?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Blog Sidebar Area -->
            <div class="col-lg-3 order-lg-1 order-2">
                <div class="li-blog-sidebar-wrapper">
                    <div class="li-blog-sidebar">
                        <div class="li-sidebar-search-form">
                            <form action="#">
                                <input type="text" class="li-search-field" placeholder="search here">
                                <button type="submit" class="li-search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="li-blog-sidebar pt-25">
                        <h4 class="li-blog-sidebar-title">Categories</h4>
                        <ul class="li-blog-archive">
                        <?php
                            foreach ($category_post as $key=>$value) :
                            ?>
                                <li><a href="#"><?=$value['title_category_post']?></a></li>                               
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                    <!-- tin liên quan -->
                    <div class="li-blog-sidebar">
                        <h4 class="li-blog-sidebar-title">Recent Post</h4>
                        <div class="li-recent-post pb-30">
                            <div class="li-recent-post-thumb">
                                <a href="blog-details.html">
                                    <img class="img-full" src="images/product/small-size/3.jpg" alt="Li's Product Image">
                                </a>
                            </div>
                            <div class="li-recent-post-des">
                                <span><a href="blog-details.html">First Blog Post</a></span>
                                <span class="li-post-date">25.11.2018</span>
                            </div>
                        </div>
                        <div class="li-recent-post pb-30">
                            <div class="li-recent-post-thumb">
                                <a href="blog-details.html">
                                    <img class="img-full" src="images/product/small-size/2.jpg" alt="Li's Product Image">
                                </a>
                            </div>
                            <div class="li-recent-post-des">
                                <span><a href="blog-details.html">First Blog Post</a></span>
                                <span class="li-post-date">25.11.2018</span>
                            </div>
                        </div>
                        <div class="li-recent-post pb-30">
                            <div class="li-recent-post-thumb">
                                <a href="blog-details.html">
                                    <img class="img-full" src="images/product/small-size/5.jpg" alt="Li's Product Image">
                                </a>
                            </div>
                            <div class="li-recent-post-des">
                                <span><a href="blog-details.html">First Blog Post</a></span>
                                <span class="li-post-date">25.11.2018</span>
                            </div>
                        </div>
                    </div>
                    <!-- end tin liên quan -->

                </div>
            </div>
            <!-- Li's Blog Sidebar Area End Here -->
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="row li-main-content">

                    <div class="col-lg-12">
                    <?php
                        foreach($detail_post as $key=>$detailP):
                    ?>
                        <div class="li-blog-single-item pb-30">
                            <div class="li-blog-banner">
                                <a href="blog-details.html"><img class="img-full" src="<?= ROOT ?>/uploads/post/<?=$detailP['img_post']?>" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><?=$detailP['title_post'] ?></h3>
                                    
                                    <!-- Begin Blog Blockquote Area -->
                                    <div class="li-blog-blockquote">
                                        <blockquote>
                                            <p><?=$detailP['desc_post'] ?></p>
                                        </blockquote>
                                    </div>
                                    <!-- Blog Blockquote Area End Here -->
                                    <p><?=$detailP['content_post'] ?> </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>

                        <!-- Begin Li's Blog Comment Section -->
                        <div class="li-comment-section">
                            <h3>03 comment</h3>
                            <ul>
                                <li>
                                    <div class="author-avatar pt-15">
                                        <img src="images/product-details/user.png" alt="User">
                                    </div>
                                    <div class="comment-body pl-15">
                                        <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                        <h5 class="comment-author pt-15">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2018 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li class="comment-children">
                                    <div class="author-avatar pt-15">
                                        <img src="images/product-details/admin.png" alt="Admin">
                                    </div>
                                    <div class="comment-body pl-15">
                                        <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                        <h5 class="comment-author pt-15">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2018 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-avatar pt-15">
                                        <img src="images/product-details/admin.png" alt="Admin">
                                    </div>
                                    <div class="comment-body pl-15">
                                        <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                        <h5 class="comment-author pt-15">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2018 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Li's Blog Comment Section End Here -->
                        <!-- Begin Blog comment Box Area -->
                        <div class="li-blog-comment-wrapper">
                            <h3>leave a reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="comment-post-box">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>comment</label>
                                            <textarea name="commnet" placeholder="Write a comment"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20">
                                            <label>Name</label>
                                            <input type="text" class="coment-field" placeholder="Name">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20">
                                            <label>Email</label>
                                            <input type="text" class="coment-field" placeholder="Email">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20">
                                            <label>Website</label>
                                            <input type="text" class="coment-field" placeholder="Website">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="coment-btn pt-30 pb-sm-30 pb-xs-30 f-left">
                                                <input class="li-btn-2" type="submit" name="submit" value="post comment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Blog comment Box Area End Here -->
                    </div>

                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>