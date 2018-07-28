<?php /* Smarty version Smarty-3.1.18, created on 2018-07-14 08:37:50
         compiled from "views\product\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56675b499a3eaf67b0-57048603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6a31f20c22773c7ea26f2154d87e96b8649cd49' => 
    array (
      0 => 'views\\product\\layout.tpl',
      1 => 1489338781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56675b499a3eaf67b0-57048603',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b499a3ebecfc3_27084427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b499a3ebecfc3_27084427')) {function content_5b499a3ebecfc3_27084427($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("views/product/banner_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/product/product_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/product/review_sp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/product/cung_loai_sp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/product/service.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
