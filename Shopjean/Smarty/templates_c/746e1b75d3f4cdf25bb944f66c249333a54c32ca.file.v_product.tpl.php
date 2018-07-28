<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 16:40:08
         compiled from "views\home\v_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53775b422248a308c2-93023288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '746e1b75d3f4cdf25bb944f66c249333a54c32ca' => 
    array (
      0 => 'views\\home\\v_product.tpl',
      1 => 1490360188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53775b422248a308c2-93023288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'san_phams' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b422248a4fc41_64803368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b422248a4fc41_64803368')) {function content_5b422248a4fc41_64803368($_smarty_tpl) {?><div class="product-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2 class="border-left-right-btm">Tất cả sản phẩm</h2>
        </div>
      </div>
    </div>
  </div>
  <div id="active-product" class="product-slider"> 
    <!-- Single-product start -->
    <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['san_phams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
    <div class="single-product">
      <div class="product-photo"> <a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"> <img class="primary-photo" src="images/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
" alt="" /> <img class="secondary-photo" src="images/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
" alt="" /> </a>
        <div class="pro-action">
        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia;?>
"/>
        <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"/>
        
        <a class="action-btn" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a> 
         </div>
      </div>
      <div class="product-brief">
        <div class="pro-rating"> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-2"></i></a> </div>
        <h2><a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</a></h2>
        <h3>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->don_gia);?>
</h3>
      </div>
    </div>
    <?php } ?>
    <!-- Single-product end --> 
  </div>
</div>
<?php }} ?>
