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
                    <div class="breadcrumb-text product-more">
                        <a href="./home.php"><i class="fa fa-home"></i>Trang Chủ</a>
                        <a href="./shop.php">Sản Phẩm</a>
                        <span>Thanh Toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">Click Để Đăng Nhập</a>
                        </div>
                        <h4>Thông Tin Đặt Hàng</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">Họ và Tên Lót<span>*</span></label>
                                <input type="text" id="fir">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Tên<span>*</span></label>
                                <input type="text" id="last">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Địa Chỉ Công Ty</label>
                                <input type="text" id="cun-name">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun"><span>Quốc Gia</span></label>
                                <input type="text" id="cun">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Địa Chỉ Nhà<span>*</span></label>
                                <input type="text" id="street" class="street-first">
                                <input type="text">
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Địa Chỉ Bưu Điện</label>
                                <input type="text" id="zip">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Quận/Huyện/Thành Phố<span>*</span></label>
                                <input type="text" id="town">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Địa Chỉ Gmail<span>*</span></label>
                                <input type="text" id="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Số Điện Thoại<span>*</span></label>
                                <input type="text" id="phone">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Xác Nhận Đúng Thông Tin Trên?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Nhập Mã Giảm Giá Của Bạn">
                        </div>
                        <div class="place-order">
                            <h4>Đơn Hàng Của Bạn</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản Phẩm<span>Thành Tiền</span></li>
                                    <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                    <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                    <li class="fw-normal">Combination x 1 <span>$120.00</span></li>
                                    <li class="fw-normal">Giá Tiền<span>0VND</span></li>
                                    <li class="total-price">Tổng Cộng<span>0VND</span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Đánh Dấu Thanh Toán
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Thanh Toán PayPal
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Đặt Hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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