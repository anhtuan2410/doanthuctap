<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 17:03:53
         compiled from "views\checkout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137795b4227d96855f6-97527289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb740ae75186e075e201b0bfeaeaedfa697aacc' => 
    array (
      0 => 'views\\checkout\\layout.tpl',
      1 => 1489986244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137795b4227d96855f6-97527289',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b4227d96c2a67_37141943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4227d96c2a67_37141943')) {function content_5b4227d96c2a67_37141943($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/banner_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/checkout_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
