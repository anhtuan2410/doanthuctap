<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 18:22:16
         compiled from "views\hoa_don\chi_tiet_hoa_don.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278785b423a3830d267-77391703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0665c1cb73e30c3c8ed736263e4025a42f3b163' => 
    array (
      0 => 'views\\hoa_don\\chi_tiet_hoa_don.tpl',
      1 => 1490028576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278785b423a3830d267-77391703',
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
  'unifunc' => 'content_5b423a3837ef88_06971309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b423a3837ef88_06971309')) {function content_5b423a3837ef88_06971309($_smarty_tpl) {?><br>

<div class="table-content table-responsive">
  <table>
    <thead>
      <tr>
        <th class="product-thumbnail">Hình</th>
        <th class="product-name">Tên sản phẩm</th>
        <th class="product-price">Đơn giá</th>
        <th class="product-quantity">Số lượng</th>
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
        <td class="product-quantity"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['ct']->value->so_luong;?>
"/></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
  <center><a href="tai_khoan.php">Quay Lại</a></center>
</div>

<br>
<?php }} ?>
