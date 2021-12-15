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
                        <span>Đăng Kí</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Đăng Kí Tài Khoản</h2>
                        <form action="#">
                            <div class="group-input">
                                <label for="username">Tài Khoản/Email *</label>
                                <input type="text" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật Khẩu *</label>
                                <input type="text" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Nhập Lại Mật Khẩu *</label>
                                <input type="text" id="con-pass">
                            </div>
                            <button type="submit" class="site-btn register-btn">Đăng Kí</button>
                        </form>
                        <div class="switch-login">
                            <a href="./login.html" class="or-login">Đăng Nhập Lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

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