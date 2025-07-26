

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Naciva</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
:root {
    --primary: #eb6d75;
    --primary-dark: hsl(340, 83%, 73%);
    --secondary: #f5f5f5;
    --text: #222;
    --border-radius: 8px;
    --shadow: 0 2px 12px rgba(0,0,0,0.07);
}
body {
    background: var(--secondary);
    color: var(--text);
    font-size: 15px;
    font-family: sans-serif;
}
#wrapper {
   /* max-width: 1200px;tùy chỉnh size web*/
    /* margin: 24px auto; */
    background: #fff;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    overflow: hidden;
}
.header {
    background: var(--primary);
    color: #fff;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
    box-shadow: 0 2px 8px rgba(32,156,90,0.08);
}
.header__top {
    padding: 8px 24px 0 24px;
}
.header__navbar--list {
    display: flex;
    justify-content: flex-end;
    gap: 18px;
  
}
.header__navbar--item a {
    color: #fff;
    font-size: 14px;
    transition: color 0.2s;
    text-decoration: none;
}
.header__navbar--item a:hover {
    color: #c92914;
}
.header__navbar--item--gach {
    border-right: 1px solid #fff3;
    padding-right: 12px;
}
.header-search {
    display: flex;
    align-items: center;
    padding: 12px 24px 0 24px;
    gap: 24px;
}
.header__logo img {
    height: 56px;
    width: auto;
    border-radius: 6px;
    background: #fff;
    padding: 4px 8px;
    box-shadow: 0 1px 4px rgba(32,156,90,0.07);
}
.header__search-text {
    position: relative;
    flex: 1;
    display: flex;
    align-items: center;
}
.header__search-text input {
    width: 100%;
    padding: 10px 38px 10px 14px;
    border-radius: var(--border-radius);
    border: 1px solid #e0e0e0;
    font-size: 15px;
    outline: none;
    transition: border 0.2s;
}
.header__search-text input:focus {
    border: 1.5px solid var(--primary);
}
.header__search-text .search-icon {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--primary);
    font-size: 18px;
    pointer-events: none;
}
.header__cart button {
    background: #fff;
    color: var(--primary);
    border: 1.5px solid var(--primary);
    border-radius: var(--border-radius);
    padding: 10px 22px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
    box-shadow: 0 1px 4px rgba(32,156,90,0.07);
}
.header__cart button:hover {
    background: var(--primary-dark);
    color: #fff;
}
.menu {
    background: var(--primary-dark);
    margin: 18px 0 0 0;
    border-radius: var(--border-radius);
    box-shadow: 0 1px 4px rgba(32,156,90,0.07);
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    transition: box-shadow 0.2s;
}
.menu.sticky {
    box-shadow: 0 4px 16px rgba(32,156,90,0.18);
}
.menu__container {
    display: flex;
    justify-content: space-between;
    padding: 0 16px;
    background: transparent;
    border-radius: var(--border-radius);
}
.menu__item a {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    padding: 0 18px;
    line-height: 44px;
    display: block;
    border-radius: var(--border-radius);
    transition: background 0.2s, color 0.2s;
    text-decoration: none;
}
.menu__item a:hover, .menu__item a:focus {
    background: #fff;
    color: var(--primary-dark);
    text-decoration: none;
}
.banner {
    margin: 0;
    border-radius: var(--border-radius);
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(32,156,90,0.07);
}
.banner img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    display: block;
}
#main {
    display: flex;
    gap: 24px;
    padding: 24px;
}
.sidebar {
    flex: 1;
    background: #f69696;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    padding: 18px 12px;
    min-width: 260px;
    max-width: 320px;
}
.text_title {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #ffffff;
    margin-left: 50px;
    font-size: 20px;
}
.sidebar_ct {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 40px;
}
.images img {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 6px;
    box-shadow: 0 1px 4px #0001;
}
.list_new a {
    color: #ffffff;
    font-weight: 500;
    font-size: 15px;
    transition: color 0.2s;
    text-decoration: none;
}
.list_new a:hover {
    color: #8e3b32;
}
.content {
    flex: 2.5;
    background: #f18989;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    padding: 18px 18px 8px 18px;
}
.note {
    color: var(--primary);
    font-size: 1.1rem;
    margin-bottom: 18px;
}
.content1 {
    display: flex;
    gap: 18px;
    margin-bottom: 18px;
}
.content12 {
    flex: 1;
    background: #f6f6f6;
    border-radius: var(--border-radius);
    box-shadow: 0 1px 4px #0001;
    padding: 12px 8px 18px 8px;
    text-align: center;
    transition: box-shadow 0.2s, transform 0.2s;
}
.content12:hover {
    box-shadow: 0 4px 16px #0002;
    transform: translateY(-2px) scale(1.03);
}
.content12 img {
    width: 100%;
    max-width: 160px;
    height: 120px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 8px;
}
.content12 span {
    display: block;
    margin: 6px 0;
    font-size: 15px;
}
.btn_muahang {
    background: var(--primary);
    color: #ffffff;
    border: none;
    border-radius: 6px;
    padding: 8px 18px;
    font-size: 15px;
    font-weight: 600;
    margin-top: 8px;
    cursor: pointer;
    transition: background 0.2s;
}
.btn_muahang:hover {
    background: var(--primary-dark);
}
.content_new {
    background: #f8f8f8;
    border-radius: var(--border-radius);
    margin: 24px 24px 0 24px;
    padding: 18px 18px 8px 18px;
    box-shadow: var(--shadow);
}
.text_title1 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 18px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.new_item {
    display: flex;
    gap: 18px;
}
.item1 {
    flex: 1;
    background: #fff;
    border-radius: var(--border-radius);
    box-shadow: 0 1px 4px #0001;
    padding: 10px 8px 18px 8px;
    text-align: center;
    transition: box-shadow 0.2s, transform 0.2s;
}
.item1:hover {
    box-shadow: 0 4px 16px #0002;
    transform: translateY(-2px) scale(1.03);
}
.item1 img {
    width: 100%;
    max-width: 180px;
    height: 120px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 8px;
}
.text_new {
    background: var(--primary);
    color: #fff;
    border-radius: 4px;
    padding: 8px 0;
    font-size: 15px;
    margin-top: 8px;
}
#footer {
    display: flex;
    gap: 24px;
    background: var(--primary-dark);
    color: #fff;
    border-radius: 0 0 var(--border-radius) var(--border-radius);
    padding: 32px 32px 20px 32px;
    margin-top: 32px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.08);
    justify-content: space-between;
    align-items: flex-start;
}
.footer1 {
    flex: 1;
    background: rgba(255,255,255,0.04);
    border-radius: 12px;
    padding: 18px 18px 12px 18px;
    margin: 0 8px;
    box-shadow: 0 1px 8px #0001;
    min-width: 200px;
}
.footer1 h3 {
    font-size: 1.1rem;
    margin-bottom: 16px;
    color: #ff3502;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.footer1 ul {
    padding-left: 0;
    list-style: none;
}
.footer1 li {
    margin-bottom: 10px;
    font-size: 15px;
    color: #fff;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.2s;
}
.footer1 li i {
    color: #eb6d75;
    font-size: 17px;
    min-width: 20px;
}
.footer1 li:hover {
    color: #eb6d75;
}
.search-icon-btn {
    background: linear-gradient(135deg, var(--primary) 60%, var(--primary-dark));
    border: none;
    border-radius: 50%;
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    right: 6px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(235,109,117,0.15);
    transition: background 0.2s, box-shadow 0.2s, transform 0.1s;
    z-index: 2;
}
.search-icon-btn:hover, .search-icon-btn:focus {
    background: linear-gradient(135deg, var(--primary-dark), var(--primary));
    box-shadow: 0 4px 16px rgba(235,109,117,0.25);
    transform: translateY(-50%) scale(1.08);
}
.search-icon-btn i.fa-search {
    color: #fff;
    font-size: 20px;
    margin: 0;
}
@media (max-width: 900px) {
    #main, .new_item, #footer {
        flex-direction: column;
        gap: 12px;
    }
    .sidebar, .content, .item1, .footer1 {
        max-width: 100%;
        min-width: unset;
    }
    .banner img {
        height: 160px;
    }
    .header-search {
        flex-direction: column;
        gap: 8px;
    }
    .menu__container {
        flex-direction: column;
        gap: 0;
    }
    .menu__item a {
        padding: 0 8px;
        text-align: left;
    }
}
@media (max-width: 600px) {
    #wrapper {
        margin: 0;
        border-radius: 0;
    }
    .header, #footer, .content_new {
        padding: 8px;
    }
    .banner img {
        height: 90px;
    }
    .header__logo img {
        height: 36px;
    }
    .content12 img, .item1 img {
        max-width: 100px;
        height: 70px;
    }
}
    </style>
</head>
<body>
    <div id="wrapper">
        <header class="header">         
            <div class="header__top">
                <ul class="header__navbar--list">
                    <li class="header__navbar--item"><a href="#"><i class="fa fa-bell"></i> Thông Báo</a></li>
                    <li class="header__navbar--item"><a href="#"><i class="fa fa-question-circle"></i> Trợ Giúp</a></li>
                    <li class="header__navbar--item header__navbar--item--gach"><a href="index.php?controller=user&action=giohang"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a></li>
                    <li class="header__navbar--item"><a href="index.php?controller=auth&action=logout"><i class="fa fa-user"></i> Đăng Xuất</a></li>
                </ul>
            </div>
            <div class="header-search">
                <div class="header__logo">
                    <a href="/"><img src="https://static.vecteezy.com/system/resources/previews/020/336/465/non_2x/gucci-logo-gucci-icon-free-free-vector.jpg" alt="Naciva Logo"></a>
                </div>
                <form class="header__search-text" action="index.php?controller=user&action=search" method="get">
                    <input type="text" name="name" placeholder="Tìm kiếm sản phẩm...">
                    <button type="submit" class="search-icon-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <nav class="menu">
                <ul class="menu__container">
                    <li class="menu__item"><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="menu__item"><a href="#">Giới thiệu</a></li>
                    <li class="menu__item"><a href="#">Sản phẩm</a></li>
                    <li class="menu__item"><a href="#">Đăng ký đại lý</a></li>
                    <li class="menu__item"><a href="#">Cẩm nang làm đẹp</a></li>
                    <li class="menu__item"><a href="#">Tin tức & Sự kiện</a></li>
                    <li class="menu__item"><a href="#">Tuyển dụng</a></li>
                    <li class="menu__item"><a href="#">Liên hệ</a></li>
                </ul>
            </nav>
        </header>
        <section class="banner">
            <img src="https://i.pinimg.com/originals/bc/25/2c/bc252c09dbb769141896a6106cf44666.jpg" alt="Banner Naciva">
        </section>
        <main id="main">
            <aside class="sidebar">
                <h2 class="text_title">Tin tức & Sự kiện</h2>
                <div class="new">
                    <div class="sidebar_ct">
                        <div class="images"><img src="https://cdn.idntimes.com/content-images/community/2023/09/snapinstaapp-382268780-694486652122732-4192808574777592750-n-1080-5d40674b5e3e3eeb9e3ef339bb46e4c4-f2eea24f10f15fd7c787c05cff9e50a0.jpg" alt=""></div>
                        <div class="list_new"><a href="#">Hoa Hậu Thùy Linh được event Gucci "mời" tham gia sự kiện ra mắt sản phẩm mới</a></div>
                    </div>
                    <div class="sidebar_ct">
                        <div class="images"><img src="https://bazaarvietnam.vn/wp-content/uploads/2017/08/Gucci-Harrods-_331.jpg" alt=""></div>
                        <div class="list_new"><a href="#">GUCCI mở triển lãm nước hoa tại Pháp. Còn chờ gì nữa đi thôi !</a></div>
                    </div>
                    <div class="sidebar_ct">
                        <div class="images"><img src="https://i.pinimg.com/originals/29/88/5d/29885d731bf464082c73f4c28daab0bd.jpg" alt=""></div>
                        <div class="list_new"><a href="#">Gương mặt quen thuộc của Gucci, bạn đoán là ai chưa ?</a></div>
                    </div>
                    <div class="sidebar_ct">
                        <div class="images"><img src="https://dummyimage.com/80x60/209c5a/fff&text=4" alt=""></div>
                        <div class="list_new"><a href="#">12 Tác Dụng Của Trà Sen Mà Trước Khi Mua Bạn Phải Biết</a></div>
                    </div>
                    <div class="sidebar_ct">
                        <div class="images"><img src="https://dummyimage.com/80x60/209c5a/fff&text=5" alt=""></div>
                        <div class="list_new"><a href="#">Cách ướp trà với hoa cúc</a></div>
                    </div>
                </div>
            </aside>
            <section class="content">
                <h2 class="text_title note" style="color: #ffffff; margin-left: 250px; font-size: 20px;">Sản phẩm nổi bật</h2>
                
                <div class="content1">
                    <div class="content12">
                        <a href="#"><img src="https://toplist.vn/images/800px/nuoc-hoa-gucci-30371.jpg" alt="Sản phẩm 1"></a>
                        <span>Gucci mẫu 01</span>
                        <span style="color: rgb(255, 0, 0)">2.600.000<sup>đ</sup></span>
                        <button class="btn_muahang">Đặt hàng</button>
                    </div>
                    <div class="content12">
                        <a href="#"><img src="https://hotgirlshop.vn/uploads/picture/27102022/News/201027102728-flora-gorgeous-gardenia-eau-de-parfum-gucci-for-women-5ml_e0b89e8ed59b44bb896e5059ad7740b0.jpg" alt="Sản phẩm 2"></a>
                        <span>Gucci mẫu 02</span>
                        <span style="color: rgb(255, 0, 0)">3.500.000<sup>đ</sup></span>
                        <button class="btn_muahang">Đặt hàng</button>
                    </div>
                    <div class="content12">
                        <a href="#"><img src="https://chiaki.vn/upload/news/content/2019/09/nuoc-hoa-gucci-bloom-nettare-di-fiori-edp-jpg-1567419226-02092019171346.jpg" alt="Sản phẩm 3"></a>
                        <span>Gucci mẫu 03</span>
                        <span style="color: rgb(255, 0, 0)">2.800.000<sup>đ</sup></span>
                        <button class="btn_muahang">Đặt hàng</button>
                    </div>
                    <div class="content12">
                        <a href="#"><img src="https://tungshop.com/wp-content/uploads/2021/04/nuoc-hoa-Gucci-Pour-Homme-EDT-nam-NHGC1-3.jpg" alt="Sản phẩm 4"></a>
                        <span>Gucci mẫu 04</span>
                        <span style="color: rgb(255, 0, 0)">2.500.000<sup>đ</sup></span>
                        <button class="btn_muahang">Đặt hàng</button>
                    </div>
                </div>
                <div class="content1">
                    <div class="content12">
                        <a href="#"><img src="https://cocolux.com/images/cdn_images/2023/02/images/products/1675819782521-nuoc-hoa-gucci-bloom-ambrosia-di-fiori-30ml-1.jpeg" alt="Sản phẩm 5"></a>
                        <span>Gucci mẫu 05</span>
                        <span style="color: rgb(255, 0, 0)">3.999.999<sup>đ</sup></span>
                        <button class="btn_muahang">Đặt hàng</button>
                    </div>
                    <div class="content12">
                        <a href="#"><img src="https://tse2.mm.bing.net/th/id/OIP.2irFt3GmGTUySibxfTYcIQHaHa?pid=Api&P=0&h=220" alt="Sản phẩm 6"></a>
                        <span>Gucci mẫu 06</span>
                        <span style="color: rgb(255, 0, 0)">1.900.000<sup>đ</sup></span>
                        <button class="btn_muahang">Đặt hàng</button>
                    </div>
                </div>
                <!-- them sản phẩm -->
                <?php foreach ($products as $product) { ?>
                        <div class="content12">
                            <a href="#"><img src="<?= $product['image'] ?>" alt=""></a>
                            <span><?= $product['name'] ?></span>
                            <span style="color: rgb(255, 0, 0)"><?= $product['price'] ?><sup>đ</sup></span>
                            <button class="btn_muahang">Đặt hàng</button>
                        </div>
                    <?php } ?>
            </section>
        </main>
        <section class="content_new">
            <h2 class="text_title1">Bài viết nổi bật</h2>
            <div class="new_item">
                <div class="item1">
                    <img src="https://dummyimage.com/180x120/209c5a/fff&text=BV1" alt="Bài viết 1">
                    <p class="text_new">Nơi Mua Trà Thái Nguyên Tại TPHCM Chính Gốc 100%</p>
                </div>
                <div class="item1">
                    <img src="https://dummyimage.com/180x120/209c5a/fff&text=BV2" alt="Bài viết 2">
                    <p class="text_new">Cây chè Thái Nguyên: Lịch sử, cách trồng & tác dụng</p>
                </div>
                <div class="item1">
                    <img src="https://dummyimage.com/180x120/209c5a/fff&text=BV3" alt="Bài viết 3">
                    <p class="text_new">TOP Những Bài Thơ Về Chè Thái Nguyên Hay Nhất</p>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer1">
                <h3><i class="fa fa-building"></i> về công ty</h3>
                <ul>
                    <li><i class="fa fa-info-circle"></i> Giới thiệu</li>
                    <li><i class="fa fa-calendar"></i> Lịch làm việc</li>
                    <li><i class="fa fa-cogs"></i> Dịch vụ</li>
                    <li><i class="fa fa-map-marker"></i> Sơ đồ chỉ đường</li>
                </ul>
            </div>
            <div class="footer1">
                <h3><i class="fa fa-shopping-bag"></i> dành cho người mua hàng</h3>
                <ul>
                    <li><i class="fa fa-lock"></i> Bảo mật thông tin</li>
                    <li><i class="fa fa-shield"></i> Chính sách bảo hành</li>
                    <li><i class="fa fa-credit-card"></i> Phương thức thanh toán</li>
                    <li><i class="fa fa-truck"></i> Phương thức vận chuyển</li>
                </ul>
            </div>
            <div class="footer1">
                <h3><i class="fa fa-map-signs"></i> địa chỉ mua hàng</h3>
                <ul>
                    <li><i class="fa fa-building-o"></i> CÔNG TY TNHH THƯƠNG MẠI LONG AN</li>
                    <li><i class="fa fa-id-card"></i> Số ĐKKD: 010233125</li>
                    <li><i class="fa fa-phone"></i> Điện thoại: 0972.922.120</li>
                    <li><i class="fa fa-globe"></i> Website: tra.ninhbinhsite.com</li>
                    <li><i class="fa fa-envelope"></i> Email:info.traxanh.com@gmail.com</li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html> 