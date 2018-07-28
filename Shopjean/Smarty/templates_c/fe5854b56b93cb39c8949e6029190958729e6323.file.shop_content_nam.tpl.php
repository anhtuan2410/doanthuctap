<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 18:14:20
         compiled from "views\shop\shop_content_nam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82215b42385c746899-31655816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5854b56b93cb39c8949e6029190958729e6323' => 
    array (
      0 => 'views\\shop\\shop_content_nam.tpl',
      1 => 1490281897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82215b42385c746899-31655816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sp_nams' => 0,
    'sp' => 0,
    'list_nam' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b42385c847e33_88276707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b42385c847e33_88276707')) {function content_5b42385c847e33_88276707($_smarty_tpl) {?><div class="shop-content" id="XlGia"> 
  <!-- product-toolbar start -->
  <!-- product-toolbar end --> 
  <!-- Shop-product start -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid-view">
      <div class="row shop-grid"> <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sp_nams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?> 
        <!-- Single-product start -->
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="single-product">
            <div class="product-photo"> <a href="chi-tiet-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"> <img class="primary-photo" src="images/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
" alt="" /> <img class="secondary-photo" src="images/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
" alt="" /> </a>
              <div class="pro-action">
                <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia;?>
"/>
                <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"/>
                <!--<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>-->
                <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia;?>
"/>
                <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"/>
                <a href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" class="action-btn"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a> </div>
            </div>
            <div class="product-brief">
              <h2><a href="chi-tiet-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</a></h2>
              <h3>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->don_gia);?>
</h3>
            </div>
          </div>
        </div>
        <!-- Single-product end --> 
        <?php } ?> </div>
    </div>
  </div>
  <!-- Shop-product end --> 
  <!-- product-toolbar start -->
  <div class="product-toolbar btm-border"> 
    <!-- Shop-menu --> 
    <!-- Pagination -->
    <div class="shop-pagination">
      <?php echo $_smarty_tpl->tpl_vars['list_nam']->value;?>

    </div>
  </div>
  <!-- product-toolbar end --> 
</div>
<?php }} ?>
