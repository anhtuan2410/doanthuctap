<div class="lognin-area">
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
              <div>{$err}</div>
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
            <p>{if isset($smarty.session.loi_dang_nhap)}{$smarty.session.loi_dang_nhap}{/if}</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
