<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include 'controllers/headerpage.php' ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header>
        <?php include 'controllers/headermenu.php' ?>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="home.php"><i class="fa fa-home"></i>Trang Chủ</a>
                        <span>Bài Viết</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Tìm Kiếm</h4>
                            <form action="#">
                                <input type="text" placeholder="Tìm . . .  " />
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Thể Loại</h4>
                            <ul>
                                <li><a href="#">Thời Trang</a></li>
                                <li><a href="#">Du Lịch</a></li>
                                <li><a href="#">Dã Ngoại</a></li>
                                <li><a href="#">Người Mẫu</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Bài Viết Gần Đây</h4>
                            <div class="recent-blog">
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="img/blog/recent-1.jpg" alt="" />
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>Thời Trang<span>- May 19, 2019</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="img/blog/recent-2.jpg" alt="" />
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>Dã Ngoại <span>- May 19, 2019</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="img/blog/recent-3.jpg" alt="" />
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>Người Mẫu<span>- May 19, 2019</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="img/blog/recent-4.jpg" alt="" />
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>Thời Trang<span>- May 19, 2019</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Các Thẻ</h4>
                            <div class="tag-item">
                                <a href="#">Towel</a>
                                <a href="#">Shoes</a>
                                <a href="#">Coat</a>
                                <a href="#">Dresses</a>
                                <a href="#">Trousers</a>
                                <a href="#">Men's hats</a>
                                <a href="#">Backpack</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/blog-1.jpg" alt="" />
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details.html">
                                        <h4>Tuần Du Lịch Với Trang Phục Làm Nổi Bật Bản Thân</h4>
                                    </a>
                                    <p>du lịch<span>- May 19, 2019</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/blog-2.jpg" alt="" />
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details.html">
                                        <h4>
                                            Chuyến dã ngoại tuần trước với bạn bè trong trang phục mùa đông
                                        </h4>
                                    </a>
                                    <p>thời trang<span>- May 19, 2019</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/blog-3.jpg" alt="" />
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details.html">
                                        <h4>
                                            Chuyến đi trong năm với người bạn thân ở thung lũng phù du
                                        </h4>
                                    </a>
                                    <p>du lịch<span>- May 19, 2019</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/blog-4.jpg" alt="" />
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details.html">
                                        <h4>
                                            Chúc mừng năm mới với những trang phục đơn giản ấm ấp
                                        </h4>
                                    </a>
                                    <p>thời trang<span>- May 19, 2019</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/blog-5.jpg" alt="" />
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details.html">
                                        <h4>
                                            Sự thay đổi về mẫu quàn áo mới trong ngành thời trang
                                        </h4>
                                    </a>
                                    <p>Người mẫu<span>- May 19, 2019</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="img/blog/blog-6.jpg" alt="" />
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details.html">
                                        <h4>
                                            Làm sao để bảo quản trang phục đắt tiền
                                        </h4>
                                    </a>
                                    <p>thời trang<span>- May 19, 2019</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#"> Tải Thêm </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Partner Logo Section Begin -->
    <div>
        <?php include 'controllers/partner-logo.php' ?>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer>
        <?php include 'controllers/footerpage.php' ?>
    </footer>
    <!-- Footer Section End -->
</body>

</html>