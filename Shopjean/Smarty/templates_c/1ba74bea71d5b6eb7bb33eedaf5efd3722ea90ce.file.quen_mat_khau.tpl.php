<?php /* Smarty version Smarty-3.1.18, created on 2018-07-22 09:39:23
         compiled from "views\account\quen_mat_khau.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160735b5434abda8030-12724260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ba74bea71d5b6eb7bb33eedaf5efd3722ea90ce' => 
    array (
      0 => 'views\\account\\quen_mat_khau.tpl',
      1 => 1490285016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160735b5434abda8030-12724260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b5434abf34cf5_07144410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5434abf34cf5_07144410')) {function content_5b5434abf34cf5_07144410($_smarty_tpl) {?><br>
<div class="lognin-area" align="center">
  <div class="container">
    <div class="row"> 
      <!-- Registered-Customers Start -->
      <div class="col-md-6">
        <form action="quen_mat_khau.php" method="post">
          <div class="registered-customers">
            <h2 class="login-title">Quên mật khẩu</h2>
            <div class="registered">
              <p>Bạn vui lòng nhập tên đăng nhập bên dưới</p>
              <div class="row">
                <div class="col-md-12">
                  <input type="text" id="txtQuenMK" name="txtQuenMK" class="custom-form" placeholder="Tên đăng nhập" />
                </div>
              </div>
              <div><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
<?php }?></div>
              <input type="submit" class="custom-submit-2" name="QuenMK" value="Gửi" />
            </div>
            <p><?php if (isset($_SESSION['quen_mat_khau'])) {?><?php echo $_SESSION['quen_mat_khau'];?>
<?php }?></p>
          </div>
        </form>
      </div>
      <!-- Registered-Customers End -->
    </div>
  </div>
</div><?php }} ?>
