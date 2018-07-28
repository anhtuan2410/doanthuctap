<?php /* Smarty version Smarty-3.1.18, created on 2018-07-22 09:13:05
         compiled from "views\home\v_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157645b422248d8dd65-20218209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a51e7df1c727dd385dd2571984aa0712815c8a7c' => 
    array (
      0 => 'views\\home\\v_blog.tpl',
      1 => 1532243572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157645b422248d8dd65-20218209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b422248d9aad9_59981731',
  'variables' => 
  array (
    'bai_viets' => 0,
    'bv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b422248d9aad9_59981731')) {function content_5b422248d9aad9_59981731($_smarty_tpl) {?><div class="blog-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2>Bài viết mới</h2>
        </div>
      </div>
    </div>
    <div class="row">
    <?php  $_smarty_tpl->tpl_vars['bv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bai_viets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bv']->key => $_smarty_tpl->tpl_vars['bv']->value) {
$_smarty_tpl->tpl_vars['bv']->_loop = true;
?>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-blog">
          <div class="blog-photo"> <a href="post_blog.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['bv']->value->hinh;?>
" alt="" /></a>
            <div class="blog-post-date"> <span><?php echo $_smarty_tpl->tpl_vars['bv']->value->ngay_xuat_ban;?>
</span>  </div>
          </div>
          <div class="blog-brief">
            <p><?php echo $_smarty_tpl->tpl_vars['bv']->value->tieu_de;?>
</p>
            <a class="shop-now-1" href="post_blog.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
">Xem thêm</a> </div>
        </div>
      </div>   
    <?php } ?>  
    </div>
  </div>
</div>
<?php }} ?>
