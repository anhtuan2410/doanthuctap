<?php /* Smarty version Smarty-3.1.18, created on 2018-07-14 08:37:50
         compiled from "views\product\cung_loai_sp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290555b499a3ef32c10-31328211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a18fa2c8bb85695dbdfe07668c064aeb9635da7' => 
    array (
      0 => 'views\\product\\cung_loai_sp.tpl',
      1 => 1490282409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290555b499a3ef32c10-31328211',
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
  'unifunc' => 'content_5b499a3f082312_43924280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b499a3f082312_43924280')) {function content_5b499a3f082312_43924280($_smarty_tpl) {?><div class="single-product-related-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="related-product-title">
          <h3>Sản phẩm cùng loại</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="active-related-product shop-grid"> 
    <!-- Single-product start --> 
    <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['san_phams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
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
" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a> </div>
      </div>
      <div class="product-brief">
        <h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
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
