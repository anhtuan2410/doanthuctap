<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 16:40:08
         compiled from "Smarty\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204635b42224852a6e5-77263720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abdedb52074239b5834a2ec64cf3ad681ca586ad' => 
    array (
      0 => 'Smarty\\templates\\header.tpl',
      1 => 1490341130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204635b42224852a6e5-77263720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b422248548982_11948382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b422248548982_11948382')) {function content_5b422248548982_11948382($_smarty_tpl) {?><!---- comment facebook --------->
<header class="header-area"> 
  <!-- Header-Top Start -->
  <div class="header-top hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="header-top-left text-left">
            <ul>
              <li> <i class="sp-phone"></i> <span>(+84)169 8833 736</span> </li>
              <li> <i class="sp-email"></i> <span>hotrokhachhang@fashioneveryone.com</span> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="header-top-right pull-right">
            <ul>
              <li><a href="#">Tài khoản <span><i class="sp-gear"></i></span></a>
                <ul class="submenu">
                  <li>
                  <a href="tai_khoan.php">
                  <?php if (isset($_SESSION['ten_dang_nhap'])) {?>
                  	Profiles
                  <?php } else { ?>
                  	Đăng nhập
                  <?php }?>  
                  </a></li>
                  <li><a href="gio_hang.php">Giỏ hàng</a></li>
                  <?php if (isset($_SESSION['ten_dang_nhap'])) {?>
                  <li><a href="tai_khoan.php?thoat">Thoát</a></li>
                  <?php }?>
                </ul>
              </li>
            </ul>
            <div class="header-search">
              <form action="tim_kiem.php" method="post">
                <input type="text" name="Tim" placeholder="Tìm kiếm..." />
                <button type="submit"><i class="sp-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header-Top End --> 
  <!-- Main-Header Start -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="logo"> <a href="index.html"><img src="https://cdn2.f-cdn.com/contestentries/37489/6986542/5231b1227f6c0_thumb900.jpg" alt="" /></a> </div>
        </div>
        <div class="col-md-8 hidden-sm hidden-xs">
          <div class="main-menu pull-right">
            <nav>
              <ul>
                <li><a href="index.html">Trang Chủ</a>
                  <!---<ul class="submenu">
                    <li class="submenu-title"><a href="#">Home pages</a></li>
                    <li><a href="index.html">Homepage Version 1</a></li>
                    <li><a href="index-2.html">Homepage Version 2</a></li>
                  </ul> -->
                </li>
                <li><a href="shop/Nam">Nam</a>
                	<!---<div class="mega-menu"> <span> <a class="mega-menu-title" href="#">Quần</a> <a href="#">casual shirt</a> <a href="#">rikke t-shirt</a> <a href="#">mia top</a> <a href="#">mia top</a> <a href="#">muscle tee</a> <a href="#">seine blouse</a> </span> <span> <a class="mega-menu-title" href="#">Áo</a> <a href="#">casual shirt</a> <a href="#">t-shirt</a> <a href="#">t-shirt</a> <a href="#">zeans</a> <a href="#">trousers/ pants </a> <a href="#">sweamwear</a> </span> <span> <a class="mega-menu-title" href="#">Phụ kiện</a> <a href="#">necklace</a> <a href="#">samhar cuff</a> <a href="#">samhar cuff</a> <a href="#">samhar cuff</a> <a href="#">nail set</a> <a href="#">drop earrings</a> </span> <span class="mega-menu-photo"> <a href="#"><img src="public/layout/img/megamenu/1.jpg" alt="" /></a> </span> </div> -->
                </li>
                <li><a href="shop/Nu">Nữ</a>
                <!----	<div class="mega-menu"> <span> <a class="mega-menu-title" href="#">Quần</a> <a href="#">casual shirt</a> <a href="#">rikke t-shirt</a> <a href="#">mia top</a> <a href="#">mia top</a> <a href="#">muscle tee</a> <a href="#">seine blouse</a> </span> <span> <a class="mega-menu-title" href="#">Áo</a> <a href="#">casual shirt</a> <a href="#">t-shirt</a> <a href="#">t-shirt</a> <a href="#">zeans</a> <a href="#">trousers/ pants </a> <a href="#">sweamwear</a> </span> <span> <a class="mega-menu-title" href="#">Phụ kiện</a> <a href="#">necklace</a> <a href="#">samhar cuff</a> <a href="#">samhar cuff</a> <a href="#">samhar cuff</a> <a href="#">nail set</a> <a href="#">drop earrings</a> </span> <span class="mega-menu-photo"> <a href="#"><img src="public/layout/img/megamenu/1.jpg" alt="" /></a> </span> </div> -->
                </li>
                <li><a href="tin-tuc">Tin Tức</a>
                  <!----<ul class="submenu">
                    <li class="submenu-title"><a href="#">Blog pages</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-blog.html">Single-blog</a></li>
                  </ul> -->
                </li>
                <!--
										<li><a href="about.html">about</a></li> -->
         <!--       <li><a href="#">Pages</a>
                  <ul class="submenu">
                    <li class="submenu-title"><a href="#">All pages</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="shop-list.html">Shop-List</a></li>
                    <li><a href="single-product.html">Single Product</a></li>
                    <li><a href="cart.html">Shopping Cart</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-blog.html">Single-Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
                </li> -->
                <li><a href="lien-he">Liên Hệ</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="total-cart">
            <ul>
              <li> <a href="gio_hang.php"> <span class="total-cart-number" id="SoLuong"><?php if (isset($_SESSION['gioHang'])) {?><?php echo count($_SESSION['gioHang']);?>
 Item<?php }?></span> <span><i class="sp-shopping-bag"></i></span> </a> 
                <!-- Mini-cart-content Start -->
                <!--<div class="total-cart-brief">
                  <div class="cart-photo-details">
                    <div class="cart-photo"> <a href="#"><img src="public/layout/img/total-cart/1.jpg" alt="" /></a> </div>
                    <div class="cart-photo-brief"> <a href="#">Men's Shirt Shirt</a> <span>$25.00</span> </div>
                    <div class="pro-delete"> <a href="#"><i class="sp-circle-close"></i></a> </div>
                  </div>
                  <div class="cart-photo-details">
                    <div class="cart-photo"> <a href="#"><img src="public/layout/img/total-cart/1.jpg" alt="" /></a> </div>
                    <div class="cart-photo-brief"> <a href="#">Men's Shirt Shirt</a> <span>$25.00</span> </div>
                    <div class="pro-delete"> <a href="#"><i class="sp-circle-close"></i></a> </div>
                  </div>
                  <div class="cart-subtotal">
                    <p>Total = $50.00</p>
                  </div>
                  <div class="cart-inner-btm"> <a href="#">Checkout</a> </div>
                </div> -->
                <!-- Mini-cart-content End --> 
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main-Header End --> 
  <!-- Mobile-menu start -->
 <div class="mobile-menu-area hidden-md hidden-lg">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="mobile-menu">
            <nav id="dropdown">
              <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="shop/Nam">Nam</a></li>
                <li><a href="shop/Nu">Nữ</a></li>
                <li><a href="tin-tuc">Tin tức</a></li>
                <li><a href="lien-he">Liên hệ</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile-menu end --> 
</header><?php }} ?>
