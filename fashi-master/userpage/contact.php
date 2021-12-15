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
                        <span>Liên Hệ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Map Section Begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d979.9878435641128!2d106.6779092!3d10.7382312!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1636811680040!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    height="610" style="border:0" allowfullscreen="">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Liên Hệ Với Chúng Tôi</h4>
                        <p>Nếu có vấn đề hãy liên hệ với chúng tôi để được hỗ trợ tận tình.</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Địa Chỉ:</span>
                                <p>Trường Đại học Công Nghệ Sài Gòn</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Số Điện Thoạii:</span>
                                <p>+84 9152.390.52</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>nguyenhoafng@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Gửi Bình Luận</h4>
                            <p>Chúng tôi sẽ sớm liên lạc với câu hỏi của bạn.</p>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Họ Tên">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Gmail bạn">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Nội Dung"></textarea>
                                        <button type="submit" class="site-btn">Gửi Thông Tin</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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