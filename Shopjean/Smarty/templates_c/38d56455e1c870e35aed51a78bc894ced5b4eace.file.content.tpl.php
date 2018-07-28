<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 16:40:08
         compiled from "Smarty\templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28125b4222485e5a22-26634135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d56455e1c870e35aed51a78bc894ced5b4eace' => 
    array (
      0 => 'Smarty\\templates\\content.tpl',
      1 => 1489073252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28125b4222485e5a22-26634135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b4222485ec984_17187698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4222485ec984_17187698')) {function content_5b4222485ec984_17187698($_smarty_tpl) {?><section class="page-content"> 
<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</section>
<?php }} ?>
