<?php /* Smarty version Smarty-3.1.18, created on 2018-07-26 16:32:21
         compiled from "views\login\login_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239275b423140190481-58714855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ac679b45377626398be1f3052ccb72b2b7c951' => 
    array (
      0 => 'views\\login\\login_content.tpl',
      1 => 1532615533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239275b423140190481-58714855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b4231401f9516_30780197',
  'variables' => 
  array (
    'err' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4231401f9516_30780197')) {function content_5b4231401f9516_30780197($_smarty_tpl) {?><div class="lognin-area">
  <div class="container">
    <div class="row"> 
      <!-- Registered-Customers Start -->
      <div class="col-md-6">
        <form action="tai_khoan.php" method="post">
          <div class="registered-customers">
            <h2 class="login-title">Đăng nhập</h2>
            <div class="registered">
              <p>Nếu bạn đã có tài khoản, xin hãy đăng nhập tại đây.</p>
              <div class="row">
                <div class="col-md-12">
                  <input type="text" id="txtUsername" class="custom-form" name="ten_dang_nhap" placeholder="Tên đăng nhập" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="password" class="custom-form" name="mat_khau" placeholder="Mật khẩu" />
                </div>
              </div>
              <p>
                <label class="forgot"><a href="quen_mat_khau.php">Quên mật khẩu?</a></label>
              </p>
              <div><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
              <input type="submit" class="custom-submit-2" name="dang_nhap" value="Đăng nhập" />
            </div>
          </div>
        </form>
      </div>
      <!-- Registered-Customers End -->
      <div class="col-md-6">
        <form action="dang_ky_thanh_cong.php" method="post">
          <div class="new-customers">
          <!-- $gioi_tinh , $so_dien_thoai, $dia_chi-->
            <h2 class="login-title">Đăng ký ngay</h2>
            <div class="row">
              <div class="col-sm-12">
                <input required="required" type="text" class="custom-form" name="txtHoTen" placeholder="Họ và tên" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input required="required" type="text" class="custom-form" name="txtTenDangNhap" id="txtTenDangNhap" onkeyup="Timmonan(this.value)" placeholder="Tên đăng nhập" />
                <div id="kq"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="custom-form" required="required" type="email" name="txtEmail" id="txtEmail" placeholder="Email" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="custom-form" type="number"    required="required"  name="txtSoDienThoai" placeholder="Số Điện Thoại" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="custom-form" type="number"  max="1" min="0"  required="required"  name="txtGioiTinh" placeholder="Nam nhập 1 , Nữ nhập 0" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="custom-form" type="text" name="txtDiaChi" placeholder="Địa Chỉ" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="custom-form" maxlength="8" type="password" id="txtPassword1" name="txtPassword1" placeholder="Mật khẩu" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input required="required" maxlength="8" class="custom-form" type="password" id="txtPassword2" name="txtPassword2" placeholder="Nhập lại mật khẩu" />
                <div id="kq2"></div>
              </div>
            </div>
            <div class="row">	
              <div class="col-sm-6">
                <input required="required" type="submit" class="custom-form custom-submit no-margin" name="dangKy" value="Đăng ký" />
              </div>
            </div>
            <p><?php if (isset($_SESSION['loi_dang_nhap'])) {?><?php echo $_SESSION['loi_dang_nhap'];?>
<?php }?></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
