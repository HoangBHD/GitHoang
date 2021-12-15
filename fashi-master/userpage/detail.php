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
                        <span>Giới Thiệu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Faq Section Begin -->
    <div class="faq-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-accordin">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        Giới thiệu thời trang
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Với mong muốn được đồng hành, truyền cảm hứng và khuyến khích các bạn nam giới trẻ dám bước ra khỏi vùng an toàn để tự do,
                                            tự tin thể hiện chính mình theo phong cách phù hợp với bản thân. Thương hiệu thời trang của chúng tôi đầu tư tâm huyết nghiên cứu thiết kế chi tiết
                                            từng sản phẩm để có thể mang lại những trải nghiệm mới cho khách hàng, cũng là thông điệp muốn nhắn nhủ đến các bạn trẻ hãy cho bản thân trải
                                            nghiệm, dám thay đổi, bứt phá để vươn lên. Chúng ta chỉ thực sự thay đổi khi chúng ta hành động. Chún tôi tin rằng dù có thể thành công hay thất bại
                                            hưng chắc chắn chỉ có những trải nghiệm mới giúp bạn trưởng thành. Trưởng thành là một hành trình với những dấu mốc thanh xuân, để khi nhìn lại
                                            tôi và bạn có thể tự tin không phải nuối tiếc “giá như…”.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">
                                        Về Chúng Tôi?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Công ty chuyên nhập khẩu, bán buôn các loại thời trang hàng hiệu với các loại với thương hiệu nổi tiếng.
                                            Chúng tôi có uy tín lâu năm với chất lượng mẫu mã sản phẩm tốt, đặc biệt giá thành hợp lý và rất cạnh tranh trên toàn quốc.
                                            Chúng tôi chuyên nhận các hợp đồng đặt lô hàng lớn và thiết kế mẫu quần áo mới với các doanh nghiệp nhỏ với số lượng lớn giá thành hợp lý.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                        Bạn tìm thấy địa chỉ chúng tôi ở đâu?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Chúng tôi có tất cả 100 cửa hàng nhỏ nằm trải dài khắp quốc gia với những thiết kế đẹp, nội thất sang trọng, các sản phẩm luôn đầy đủ và phục vụ khách hàng tốt nhất.
                                            Vui lòng vào trang liên hệ để tìm kiếm địa chỉ của chúng tôi!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer>
        <?php include 'controllers/footerpage.php' ?>
    </footer>
    <!-- Footer Section End -->
</body>

</html>