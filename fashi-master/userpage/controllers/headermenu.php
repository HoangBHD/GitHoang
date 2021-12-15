 <!-- Header Section Begin -->
 <header class="header-section">
     <div class="header-top">
         <div class="container">
             <div class="ht-left">
                 <div class="mail-service">
                     <i class="fa fa-envelope"></i>
                     nguyenhoafnssg@Gmail.com
                 </div>
                 <div class="phone-service">
                     <i class="fa fa-phone"></i>
                     +84 915239052
                 </div>
             </div>
             <div class="ht-right">
                 <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Đăng Nhập</a>
                 <a href="register.php" class="register-panel"><i class="fa fa-user"></i>Đăng Kí</a>
                 <div class="lan-selector">
                     <select class="language_drop" name="countries" id="countries" style="width: 300px">
                         <option value="yt" data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                             English
                         </option>
                         <option value="yu" data-image="img/flag-2.jpg" data-imagecss="flag yu" data-title="Việt Nam">
                             Vietnam
                         </option>
                     </select>
                 </div>
                 <div class="top-social">
                     <a href="#"><i class="ti-facebook"></i></a>
                     <a href="#"><i class="ti-twitter-alt"></i></a>
                     <a href="#"><i class="ti-linkedin"></i></a>
                     <a href="#"><i class="ti-pinterest"></i></a>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="inner-header">
             <div class="row">
                 <div class="col-lg-2 col-md-2">
                     <div class="logo">
                         <a href="./home.php">
                             <img src="img/logo.png" alt="" />
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-7 col-md-7">
                     <div class="advanced-search">
                         <button type="button" class="category-btn">Tìm Danh Mục</button>
                         <div class="input-group">
                             <input type="text" placeholder="Bạn muốn tìm gì?" />
                             <button type="button"><i class="ti-search"></i></button>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 text-right col-md-3">
                     <ul class="nav-right">
                         <li class="heart-icon">
                             <a href="#">
                                 <i class="icon_heart_alt"></i>
                                 <span>1</span>
                             </a>
                         </li>
                         <li class="cart-icon">
                             <a href="#">
                                 <i class="icon_bag_alt"></i>
                                 <span>3</span>
                             </a>
                             <div class="cart-hover">
                                 <div class="select-items">
                                     <table>
                                         <tbody>
                                             <tr>
                                                 <td class="si-pic">
                                                     <img src="img/select-product-1.jpg" alt="" />
                                                 </td>
                                                 <td class="si-text">
                                                     <div class="product-selected">
                                                         <p></p>
                                                         <h6></h6>
                                                     </div>
                                                 </td>
                                                 <td class="si-close">
                                                     <i class="ti-close"></i>
                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td class="si-pic">
                                                     <img src="img/select-product-2.jpg" alt="" />
                                                 </td>
                                                 <td class="si-text">
                                                     <div class="product-selected">
                                                         <p></p>
                                                         <h6></h6>
                                                     </div>
                                                 </td>
                                                 <td class="si-close">
                                                     <i class="ti-close"></i>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <div class="select-total">
                                     <span>Tổng cộng:</span>
                                     <h5></h5>
                                 </div>
                                 <div class="select-button">
                                     <a href="#" class="primary-btn view-card">Xem Thông Tin
                                         <a href="#" class="primary-btn checkout-btn">Thanh Toán</a>
                                 </div>
                             </div>
                         </li>
                         <li class="cart-price">0$</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="nav-item">
         <div class="container">
             <div class="nav-depart">
                 <div class="depart-btn">
                     <i class="ti-menu"></i>
                     <span>Tất Cả Danh Mục</span>
                     <ul class="depart-hover">
                         <li class="active"><a href="#">Quấn Áo Phụ Nữ</a></li>
                         <li><a href="#">Quần Áo Đàn Ông</a></li>
                         <li><a href="#">Quần Áo Trẻ Em</a></li>
                         <li><a href="#">Quần Áo Du Lịch</a></li>
                         <li><a href="#">Quần Áo Dã Ngoại</a></li>
                         <li><a href="#">Đồ Lót</a></li>
                         <li><a href="#">Phụ Kiện/Giầy</a></li>
                         <li><a href="#">Thương Hiệu Thời Trang</a></li>
                         <li><a href="#">Thương Hiệu Cao Cấp</a></li>
                     </ul>
                 </div>
             </div>
             <nav class="nav-menu mobile-menu">
                 <ul>
                     <li><a href="./home.php">Trang Chủ</a></li>
                     <li><a href="./shop.php">Sản Phẩm</a></li>
                     <li><a href="./detail.php">Giới Thiệu</a>
                     </li>
                     <li><a href="./blog.php">Bài Viết</a></li>
                     <li><a href="./contact.php">Liên Hệ</a></li>
                     <li><a href="#">Giỏ Hàng</a>
                         <ul class="dropdown">
                             <li><a href="./shopping-cart.php">Xem Giỏ Hàng</a></li>
                             <li><a href="./check-out.php">Thanh Toán</a></li>
                         </ul>
                     </li>
                 </ul>
             </nav>
             <div id="mobile-menu-wrap"></div>
         </div>
     </div>
 </header>
 <!-- Header End -->