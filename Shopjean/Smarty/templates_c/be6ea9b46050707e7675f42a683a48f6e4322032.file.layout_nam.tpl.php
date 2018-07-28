<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 18:14:20
         compiled from "views\shop\layout_nam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289165b42385c5950e3-87512828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6ea9b46050707e7675f42a683a48f6e4322032' => 
    array (
      0 => 'views\\shop\\layout_nam.tpl',
      1 => 1490242446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289165b42385c5950e3-87512828',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b42385c6e6a65_51641609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b42385c6e6a65_51641609')) {function content_5b42385c6e6a65_51641609($_smarty_tpl) {?><div class="page-banner-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-banner-menu">
          <h2 class="page-banner-title">Shop Nam</h2>
          <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li>Shop Nam</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="shop-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
      <span class="shop-border"></span> 
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("views/shop/danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> 
        <!-- Shop-Content start --> 
        <?php echo $_smarty_tpl->getSubTemplate ("views/shop/shop_content_nam.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
        <!-- Shop-Content end --> 
      </div>
    </div>
  </div>
</div><?php }} ?>
