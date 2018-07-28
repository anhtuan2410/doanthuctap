<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 16:40:08
         compiled from "views\home\v_best_sell.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285825b422248bb90b2-27108366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1501c93c8ef5a9b88dc28c83099d02b625b9d9a' => 
    array (
      0 => 'views\\home\\v_best_sell.tpl',
      1 => 1490099348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285825b422248bb90b2-27108366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nam' => 0,
    'sp' => 0,
    'nu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b422248bf6e67_77855801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b422248bf6e67_77855801')) {function content_5b422248bf6e67_77855801($_smarty_tpl) {?><div class="best-sell-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2 class="border-left-right-btm">Mua Nhiều</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"> 
        <!-- best-sell-menu -->
        <ul role="tablist" class="best-sell-menu">
          <li role="presentation" class="active"><a href="#men" role="tab" data-toggle="tab">Nam</a></li>
          <li role="presentation"><a href="#women"  role="tab" data-toggle="tab">Nữ</a></li>
        </ul>
        <!-- best-sell-product -->
        <div class="tab-content best-sell-product">
          <div role="tabpanel" class="tab-pane fade in active" id="men">
            <div class="row">
            <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nam']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
              <div class="col-md-4 col-sm-4 col-xs-12"> 
                <!-- Single-product start -->
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
                    <!--<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>-->
                    <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia;?>
"/>
        			<input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"/>
                    <a href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" class="action-btn"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a>  
                    <!--<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a> -->
                    </div>
                  </div>
                  <div class="product-brief">
                    <h2><a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</a></h2>
                    <div class="product-brief-inner">
                      <h3>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->don_gia);?>
</h3>
                      <div class="pro-rating"> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-2"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
			<?php } ?>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="women">
            <div class="row">
              <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
              <div class="col-md-4 col-sm-4 col-xs-12"> 
                <!-- Single-product start -->
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
                    <!--<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>-->
                    <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia;?>
"/>
        			<input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"/>
                    <a href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" class="action-btn"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a>  
                    </div>
                  </div>
                  <div class="product-brief">
                    <h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</a></h2>
                    <div class="product-brief-inner">
                      <h3>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->don_gia);?>
</h3>
                      <div class="pro-rating"> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-2"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
			<?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
