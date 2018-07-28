<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 16:43:02
         compiled from "views\blog\blog_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249635b4222f6ad7b69-92847264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0383ccd210ef2d4fe3811570981f4dcd6ca71a' => 
    array (
      0 => 'views\\blog\\blog_post.tpl',
      1 => 1490277541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249635b4222f6ad7b69-92847264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bai_viet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b4222f6b5e553_23018947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4222f6b5e553_23018947')) {function content_5b4222f6b5e553_23018947($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("views/blog/banner_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="blog-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="row">
          <div class="col-md-12">
            <div class="single-blog">
              <div class="blog-photo"> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->hinh;?>
" alt="" /></a>
                <div class="blog-post-date"> <span>13th</span> <span>Feb</span> </div>
              </div>
              <div class="blog-brief">
                <p><?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->noi_dung_chi_tiet;?>
</p>
                <div class="like-comment"> <a href="#"><i class="sp-like"></i>120 like</a> <a href="#"><i class="sp-comment"></i>60 comment</a> </div>
              </div>
            </div>
            <div class="social-sharing">
              <h3>Chia sẽ bài viết này</h3>
              <div class="sharing-icon"> <a href="#"><i class="sp-facebook"></i></a> <a href="#"><i class="sp-twitter"></i></a> <a href="#"><i class="sp-linkedin"></i></a> <a href="#"><i class="sp-google"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12"> 
		<?php echo $_smarty_tpl->getSubTemplate ("views/blog/widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
    </div>
  </div>
</div>
<?php }} ?>
