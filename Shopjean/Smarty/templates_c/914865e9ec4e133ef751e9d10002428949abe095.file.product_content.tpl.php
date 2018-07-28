<?php /* Smarty version Smarty-3.1.18, created on 2018-07-28 15:53:27
         compiled from "views\product\product_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145535b499a3ecc5842-95606228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '914865e9ec4e133ef751e9d10002428949abe095' => 
    array (
      0 => 'views\\product\\product_content.tpl',
      1 => 1532786005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145535b499a3ecc5842-95606228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b499a3ed57884_02598589',
  'variables' => 
  array (
    'san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b499a3ed57884_02598589')) {function content_5b499a3ed57884_02598589($_smarty_tpl) {?><div class="single-product-aea margin-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="single-product-tab-content">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="img-one"> <img src="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="" />
                            <a href="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" data-lightbox="roadtrip" data-title="Ảnh"> <span class="view-full-screen"><i class="sp-full-view"></i> view full screen</span> </a>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="img-two"> <img src="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="" />
                            <a href="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" data-lightbox="roadtrip" data-title="Ảnh"> <span class="view-full-screen"><i class="sp-full-view"></i> view full screen</span> </a>
                        </div>
                      
                    </div>
                    <!-- Nav tabs -->
                    <ul class="">
                        <li class="active"><a href="#img-one" data-toggle="tab"><img src="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="" /></a></li>
                        <li><a href="#img-two" data-toggle="tab"><img src="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="" /></a></li>
                        <li><a href="#img-three" data-toggle="tab"><img src="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="" /></a></li>
                        <li><a href="#img-four" data-toggle="tab"><img src="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="single-product-description">
                    <h3 class="title-3"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</h3>
                    <h4>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
</h4>
                   
                    <div class="pro-size"> <span>Size</span> <a href="#">xs</a> <a href="#">s</a> <a href="#">ml</a> <a href="#">xl</a> <a href="#">x</a> </div>
                    <div class="product-counts fix margin-top-80">
                        <form action="#">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" />
                            </div>
                        </form>
                        <div class="single-pro-add-cart">
                            <a class="shop-now" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
">Thêm giỏ hàng</a>
                            <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
" />
                        </div>
                        <br />
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
