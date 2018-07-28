<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 16:43:10
         compiled from "views\blog\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198385b4222fede32f6-85360924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d3fc7d18dec120eab808b167630aa5e109977d' => 
    array (
      0 => 'views\\blog\\layout.tpl',
      1 => 1489398611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198385b4222fede32f6-85360924',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b4222fee1f960_72298007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4222fee1f960_72298007')) {function content_5b4222fee1f960_72298007($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("views/blog/banner_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/blog/blog_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
