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
   
    margin: 24px auto;
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
}
.menu__container {
    display: flex;
    justify-content: space-between;
    padding: 0 16px;
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
    padding: 24px 24px 12px 24px;
    margin-top: 32px;
}
.footer1 {
    flex: 1;
}
.footer1 h3 {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #ff3502;
    text-transform: uppercase;
}
.footer1 ul {
    padding-left: 0;
}
.footer1 li {
    margin-bottom: 6px;
    font-size: 14px;
    color: #fff;
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
                <form class="header__search-text" action="./client.php" method="get">
                    <input type="hidden" name="controller" value="client">
                    <input type="hidden" name="action" value="search">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
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
        <div class="cart-section">
      



<!--FORM GIO HANG -->   

   
    <style>
        
        
        .cart-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            max-width: 100%;
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 15px 10px;
            border-bottom: 1px solid #eaeaea;
            transition: background-color 0.3s;
        }
        .cart-item:hover {
            background-color:rgba(237, 236, 236, 0.91);
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .item-details {
            display: flex;
            align-items: center;
        }
        .item-image {
            width: 60px;
            height: 60px;
            margin-right: 15px;
            border-radius: 5px;
        }
        .item-name {
            font-weight: bold;
            color: #333;
        }
        .item-price {
            color:rgb(255, 29, 29);
            font-size: 1.1em;
        }
        .item-quantity {
            margin-left: 800px;
            display: flex;
            align-items: center;
            color: #555;
        }
        .quantity-button {
            background-color:rgb(250, 57, 102);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
            transition: background-color 0.3s;
            margin: 0 5px;
        }
        .quantity-button:hover {
            background-color:rgb(139, 21, 21);
        }
        .remove-button {
            background-color:rgb(219, 53, 53);
            color: white;
            border: none;
            padding: 4px 8px; /* Giảm kích thước nút xóa */
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.8em; /* Giảm kích thước chữ */
            transition: background-color 0.3s;
        }
        .remove-button:hover {
            background-color:rgb(230, 25, 25);
            transform: scale(1.05); /* Tăng kích thước nút khi hover */
        }
        .total {
            font-weight: bold;
            margin-top: 20px;
            text-align: right;
            font-size: 1.2em;
            color: #333;
        }
        .checkout-button {
            background-color:rgb(244, 92, 92);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
            display: block;
            width:20%;
            margin-top: 20px ;
            margin-left: 1170px;
        }
        .checkout-button:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>

<div class="cart-container">
    <h2>Giỏ Hàng Của Bạn</h2>
    <div class="cart-item">
        <div class="item-details">
            <img src="https://via.placeholder.com/60" alt="Item 1" class="item-image">
            <div>
                <div class="item-name">Sản phẩm 1</div>
                <div class="item-price">100.000 VNĐ</div>
            </div>
        </div>
        <div class="item-quantity">
            <button class="quantity-button" onclick="changeQuantity(this, 1)">+</button>
            <span class="quantity">1</span>
            <button class="quantity-button" onclick="changeQuantity(this, -1)">-</button>
        </div>
        <button class="remove-button" onclick="removeItem(this)">Xóa</button>
    </div>
    <div class="cart-item">
        <div class="item-details">
            <img src="https://via.placeholder.com/60" alt="Item 2" class="item-image">
            <div>
                <div class="item-name">Sản phẩm 2</div>
                <div class="item-price">200.000 VNĐ</div>
            </div>
        </div>
        <div class="item-quantity">
            <button class="quantity-button" onclick="changeQuantity(this, 1)">+</button>
            <span class="quantity">2</span>
            <button class="quantity-button" onclick="changeQuantity(this, -1)">-</button>
        </div>
        <button class="remove-button" onclick="removeItem(this)">Xóa</button>
    </div>
    <div class="cart-item">
        <div class="item-details">
            <img src="https://via.placeholder.com/60" alt="Item 3" class="item-image">
            <div>
                <div class="item-name">Sản phẩm 3</div>
                <div class="item-price">150.000 VNĐ</div>
            </div>
        </div>
        <div class="item-quantity">
            <button class="quantity-button" onclick="changeQuantity(this, 1)">+</button>
            <span class="quantity">1</span>
            <button class="quantity-button" onclick="changeQuantity(this, -1)">-</button>
        </div>
        <button class="remove-button" onclick="removeItem(this)">Xóa</button>
    </div>
    <div class="cart-item">
        <div class="item-details">
            <img src="https://via.placeholder.com/60" alt="Item 4" class="item-image">
            <div>
                <div class="item-name">Sản phẩm 4</div>
                <div class="item-price">300.000 VNĐ</div>
            </div>
        </div>
        <div class="item-quantity">
            <button class="quantity-button" onclick="changeQuantity(this, 1)">+</button>
            <span class="quantity">1</span>
            <button class="quantity-button" onclick="changeQuantity(this, -1)">-</button>
        </div>
        <button class="remove-button" onclick="removeItem(this)">Xóa</button>
    </div>
    <div class="cart-item">
        <div class="item-details">
            <img src="https://via.placeholder.com/60" alt="Item 5" class="item-image">
            <div>
                <div class="item-name">Sản phẩm 5</div>
                <div class="item-price">250.000 VNĐ</div>
            </div>
        </div>
        <div class="item-quantity">
            <button class="quantity-button" onclick="changeQuantity(this, 1)">+</button>
            <span class="quantity">3</span>
            <button class="quantity-button" onclick="changeQuantity(this, -1)">-</button>
        </div>
        <button class="remove-button" onclick="removeItem(this)">Xóa</button>
    </div>
    <div class="total">Tổng cộng: 1.300.000 VNĐ</div>
    <button class="checkout-button">Thanh Toán</button>
</div>
        <!-- button so luong khong align-items -->
<script>
    function removeItem(button) {
        const cartItem = button.parentElement.parentElement;
        cartItem.remove();
        updateTotal();
    }

    function changeQuantity(button, change) {
        const quantityElement = button.parentElement.querySelector('.quantity');
        let quantity = parseInt(quantityElement.textContent);
        quantity += change;

        // Đảm bảo số lượng không âm
        if (quantity < 1) {
            quantity = 1;
        }

        quantityElement.textContent = quantity;
        updateTotal();
    }

    function updateTotal() {
        const cartItems = document.querySelectorAll('.cart-item');
        let total = 0;

        cartItems.forEach(item => {
            const priceText = item.querySelector('.item-price').textContent;
            const quantity = parseInt(item.querySelector('.quantity').textContent);
            const price = parseInt(priceText.replace(/\./g, '').replace(' VNĐ', ''));
            total += price * quantity;
        });

        document.querySelector('.total').textContent = 'Tổng cộng: ' + total.toLocaleString() + ' VNĐ';
    }
</script>








        </div>
        <?php
        if (isset($content) && !empty($content)) {
            echo $content;
        }
        ?>
        <footer id="footer">
            <div class="footer1">
                <h3>về công ty</h3>
                <ul>
                    <li>Giới thiệu</li>
                    <li>Lịch làm việc</li>
                    <li>Dịch vụ</li>
                    <li>Sơ đồ chỉ đường</li>
                </ul>
            </div>
            <div class="footer1">
                <h3>dành cho người mua hàng</h3>
                <ul>
                    <li>Bảo mật thông tin</li>
                    <li>Chính sách bảo hành</li>
                    <li>Phương thức thanh toán</li>
                    <li>Phương thức vận chuyển</li>
                </ul>
            </div>
            <div class="footer1">
                <h3>địa chỉ mua hàng</h3>
                <ul>
                    <li>CÔNG TY TNHH THƯƠNG MẠI LONG AN</li>
                    <li>Số ĐKKD: 010233125</li>
                    <li>Điện thoại: 0972.922.120</li>
                    <li>Website: tra.ninhbinhsite.com</li>
                    <li>Email:info.traxanh.com@gmail.com</li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html> 