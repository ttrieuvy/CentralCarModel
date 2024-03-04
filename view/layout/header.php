
<style>
    .header {
        background-color: #0d3144;
        height: 70px;
    }
    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    .icon-header {
        display: flex;
        float: right;
    }

    .icon-header i {
        /* color: #fff; */
        color: #0d3144;
        font-size: 20px;
        padding: 5px 5px;
    }

    .icon-user {
        position: relative;
    }

    .logo {
        text-align: center;
    }

    .logo img {
        height: 70px;
        padding: 5px;
    }

    .searching {
        padding: 10px 0;
    }

    .search-input {
        width: 100%;
        padding: 12px 24px;
        background-color: transparent;
        transition: transform 1.5s ease-in-out;
        font-size: 14px;
        line-height: 18px;
        color: #fff;
        background-color: transparent;
        background-image: url(../../content/image/different/search.png);
        background-repeat: no-repeat;
        background-size: 24px 24px;
        background-position: 95% center;
        border-radius: 50px;
        border: 2px solid #fff;
        transition: all 250ms ease-in-out;
        backface-visibility: hidden;
        transform-style: preserve-3d;
    }

    .search-input::placeholder {
        color: color(#fff a(0.8));
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .search-input:hover,
    .search-input:focus {
        padding: 12px 0;
        outline: 0;
        border: 1px solid transparent;
        border-bottom: 1px solid #fff;
        border-radius: 0;
        background-position: 100% center;
    }

    .navigation ul {
        display: flex;
        justify-content: space-between;
        height: 70px;
        align-items: center;
        margin: 0;
    }

    .navigation li {
        /* display: inline-block; */
        font-weight: bold;
        /* background-color: transparent; */
    }

    .navigation a {
        color: #fff;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        transition: 0.5s;
    }

    .navigation a:hover {
        box-shadow: 0 0 400px 86px #86d5f3;
        text-decoration: underline #fff;
    }

    /* drop down */

    .dropbtn {
        background-color: white;
        /* color: white; */
        padding: 5px 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        /* width: 160px; */
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #1ea8d9;
        color: #f9f9f9;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #0d3144;
        color: white;
    }
    .icon-shopcart{
        width: 50px;
    }
    .header-content-sale{
        margin-top: 5px;
    }
</style>

<body>
    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <div class="header-content-sale">
                        <marquee behavior="" direction="left">
                            <span>ƯU ĐÃI RỰC RỠ - HÈ VUI HẾT CƠ - ƯU ĐÃI LÊN ĐẾN</span>
                            <span style="color: red; font-weight: 700;">40%</span>
                        </marquee>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="icon-header">
                        <div class="icon-user">
                            <div class="dropdown">
                                <a href=""><i class="fa-solid fa-user dropbtn" style="padding-right: 5px;"></i></a>

                                <?php
                                if (isset($_SESSION['user']) && $_SESSION['user']) {
                                    echo '<button class="dropbtn"><b>' . $_SESSION['user']['first_name'] . '</b></button>';
                                }
                                ?>
                                <div class="dropdown-content">
                                <?php
                                if (isset($_SESSION['user']) && $_SESSION['user']) {
                                    if ($_SESSION['user']['role'] == 1) {
                                    echo '<a href="' . $ADMIN_URL . '/trang-chinh">Quản trị viên</a>';
                                    }
                                    echo '
                                    <a href="' . $SITE_URL . '/user/ho-so.php">Hồ sơ của bạn</a>
                                    <a href="' . $SITE_URL . '/lich-su-mua-hang/index.php">Lịch sử mua hàng</a>
                                    <a href="' . $ACCOUNT_URL . '/checkLogin.php?btn-logoff">Đăng xuất</a>
                                    ';

                                } else {
                                    echo '<a href="' . $SITE_URL . '/user/dang-nhap.php">Đăng nhập</a>
                                    <a href="' . $SITE_URL . '/user/dang-ky.php">Đăng ký</a>
                                    ';
                                }
                                ?>
                                    
                                </div>
                            </div>

                        </div>
                        <span>|</span>
                        <div class="icon-shopcart">
                            <a href="<?= $SITE_URL ?>/product/shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                            <?= isset($_SESSION['totalCart'])?$_SESSION['totalCart']:0
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="<?= $SITE_URL ?>/trang-chinh">
                            <img src="<?= $CONTENT_URL ?>/image/different/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="searching">
                        <form action="<?= $SITE_URL ?>/product/product-by-type.php">
                            <input class="search-input" type="text" name="search" placeholder="TÌM KIẾM SẢN PHẨM">
                            <input type="submit" value="submit" name="search_button" hidden>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="navigation">
                        <ul>
                            <li><a href="<?= $SITE_URL ?>/trang-chinh?trangchu">TRANG CHỦ</a></li>
                            <li><a href="<?= $SITE_URL ?>/trang-chinh?san-pham">SẢN PHẨM</a></li>
                            <li><a href="<?= $SITE_URL ?>/trang-chinh?tra-cuu">TRA CỨU ĐƠN HÀNG</a></li>
                            <li><a href="<?= $SITE_URL ?>/trang-chinh?tin-tuc">TIN TỨC</a></li>
                            <li><a href="<?= $SITE_URL ?>/trang-chinh?lien-he">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
