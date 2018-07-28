<?php /* Smarty version Smarty-3.1.18, created on 2018-07-14 08:37:41
         compiled from "views\tim_kiem\tim_kiem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8505b499a35462cd5-81245177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f37ba8f10d0d93b7abb8e9e836dcdc18dc7bb959' => 
    array (
      0 => 'views\\tim_kiem\\tim_kiem.tpl',
      1 => 1490126960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8505b499a35462cd5-81245177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chi_tiets' => 0,
    'ct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b499a35997e50_32165660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b499a35997e50_32165660')) {function content_5b499a35997e50_32165660($_smarty_tpl) {?><br>

<div class="table-content table-responsive">
  <table>
    <thead>
      <tr>
        <th class="product-thumbnail">Hình</th>
        <th class="product-name">Tên sản phẩm</th>
        <th class="product-price">Đơn giá</th>
        <th class="product-price">Xem sản phẩm</th>
      </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['ct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chi_tiets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->key => $_smarty_tpl->tpl_vars['ct']->value) {
$_smarty_tpl->tpl_vars['ct']->_loop = true;
?>
    <tbody>
      <tr>
        <td class="product-thumbnail"><a href="#"><img src="images/<?php echo $_smarty_tpl->tpl_vars['ct']->value->hinh;?>
" alt="" /></a></td>
        <td class="product-name"><a href="#"><?php echo $_smarty_tpl->tpl_vars['ct']->value->ten_san_pham;?>
</a></td>
        <td class="product-price"><span class="amount">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['ct']->value->don_gia);?>
</span></td>
        <td class="product-price"><a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['ct']->value->ma_san_pham;?>
">Xem</a></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
  <center><a href="index.php">Quay Lại</a></center>
</div>

<br>
<?php }} ?>
