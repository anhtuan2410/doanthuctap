<?php /* Smarty version Smarty-3.1.18, created on 2018-07-17 17:08:00
         compiled from "views\shop\danh_muc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235585b4238454bf145-42178413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8513f1d7821f29c1f0c2e30c72df6b811015d28' => 
    array (
      0 => 'views\\shop\\danh_muc.tpl',
      1 => 1531840079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235585b4238454bf145-42178413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b423845501669_67917043',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b423845501669_67917043')) {function content_5b423845501669_67917043($_smarty_tpl) {?><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <!-- widget-categories start -->
    <aside class="widget widget-categories">
        <h5>Danh Mục</h5>
        <ul>
            <li><a href="shop.php?GT=Nam">Nam</a></li>
            <li><a href="shop.php?GT=Nu">Nữ</a></li>
        </ul>
    </aside>
    <!-- widget-categories end -->
    <!-- shop-filter start -->
    <aside class="widget shop-filter">
        <h3 class="sidebar-title">Giá (Trong VND)</h3>
        <div class="info_widget">
            <div id="slider-range"></div>
            <div id="amount">
                <input type="text" name="first_price" class="first_price" id="gtDau"/>
                <input type="text" name="last_price" class="last_price" id="gtCuoi"/>
            </div>
            <button class="shop-now-1" id="timGT">Tìm</button>
        </div>
    </aside>
    <!-- shop-filter end -->
    <!-- widget-color start -->

    </aside>
    <!-- widget-color end -->
    <!-- widget-brand start -->
    <aside class="widget widget-brand">
        <h5 class="sidebar-title">Kích thước</h5>
        <ul>
            <li>
                <input type="checkbox" />
                <a href="#">M</a></li>
            <li>
                <input type="checkbox" />
                <a href="#">L</a></li>
            <li>
                <input type="checkbox" />
                <a href="#">XL</a></li>
        </ul>
    </aside>
    <!-- widget-brand end -->
</div>
<?php }} ?>
