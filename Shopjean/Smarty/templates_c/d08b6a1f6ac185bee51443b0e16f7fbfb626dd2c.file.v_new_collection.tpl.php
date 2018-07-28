<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 16:40:08
         compiled from "views\home\v_new_collection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232725b422248965b51-61053615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd08b6a1f6ac185bee51443b0e16f7fbfb626dd2c' => 
    array (
      0 => 'views\\home\\v_new_collection.tpl',
      1 => 1490360085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232725b422248965b51-61053615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'san_pham_new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b42224898b966_57888421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b42224898b966_57888421')) {function content_5b42224898b966_57888421($_smarty_tpl) {?><div class="new-collection-area fix margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2 class="border-left-right-btm">Sản phẩm mới</h2>
        </div>
      </div>
    </div>
  </div>
  <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  <div class="col-lg-4 col-md-6 col-sm-6 padding-0">
    <div class="single-collection">
      <div class="collection-photo"> <a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham_new']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_san_pham;?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['san_pham_new']->value[$_smarty_tpl->tpl_vars['i']->value]->hinh;?>
" alt="" height="200"/></a> </div>
      <div class="collection-brief">
        <div class="text-right"> <span class="new">new</span> </div>
        <h2><br />
          <span><?php echo $_smarty_tpl->tpl_vars['san_pham_new']->value[$_smarty_tpl->tpl_vars['i']->value]->ten_san_pham;?>
</span></h2>
        <ul>
          <li><?php echo $_smarty_tpl->tpl_vars['san_pham_new']->value[$_smarty_tpl->tpl_vars['i']->value]->mo_ta_tom_tat;?>
</li>
        </ul>
        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['san_pham_new']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['san_pham_new']->value[$_smarty_tpl->tpl_vars['i']->value]->don_gia;?>
"/>
        <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['san_pham_new']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_san_pham;?>
"/>
        <a class="shop-now active-shop-now" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['san_pham_new']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_san_pham;?>
">Mua ngay</a> </div>
    </div>
  </div>
  <?php }} ?> </div>
<?php }} ?>
