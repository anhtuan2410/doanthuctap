<?php /* Smarty version Smarty-3.1.18, created on 2018-07-22 09:10:11
         compiled from "views\blog\widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254015b4222f6c4bc72-26359970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0327f48193c1bcea04ce65de468f480d5a35a86' => 
    array (
      0 => 'views\\blog\\widget.tpl',
      1 => 1532243404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254015b4222f6c4bc72-26359970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b4222f6c8cbc0_19873159',
  'variables' => 
  array (
    'i' => 0,
    'bai_viets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4222f6c8cbc0_19873159')) {function content_5b4222f6c8cbc0_19873159($_smarty_tpl) {?><aside class="widget sidebar-banner margin-mbl"> <a href="#"><img src="http://vn-live.slatic.net/cms/2016/campaign-12/Tet/12-banner-trend-03.jpg" alt="" /></a> </aside>
<aside class="widget top-rated">
  <h5 class="sidebar-title">Được quan tâm nhiều</h5>
  <div class="sidebar-product"> 
    <!-- Single-product start --> 
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (0) : 0-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <div class="single-product">
      <div class="product-photo"> <a href="post_blog.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bai_viets']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_bai_viet;?>
"> <img class="primary-photo" src="images/<?php echo $_smarty_tpl->tpl_vars['bai_viets']->value[$_smarty_tpl->tpl_vars['i']->value]->hinh;?>
" alt=""/> </a> </div>
      <div class="product-brief">
        <h2><a href="post_blog.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bai_viets']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_bai_viet;?>
"><?php echo $_smarty_tpl->tpl_vars['bai_viets']->value[$_smarty_tpl->tpl_vars['i']->value]->tieu_de;?>
</a></h2>
      </div>
    </div>
    <?php }} ?> </div>
</aside>
<aside> <a href="#"><img src="http://www.laprendo.com/data/1/Folder/leftbanner/leftbanner_20160422.jpg" alt="" /></a> </aside>
<?php }} ?>
