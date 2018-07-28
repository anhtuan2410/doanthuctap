<br>
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
              <div>{if isset($error)}{$err}{/if}</div>
              <input type="submit" class="custom-submit-2" name="QuenMK" value="Gửi" />
            </div>
            <p>{if isset($smarty.session.quen_mat_khau)}{$smarty.session.quen_mat_khau}{/if}</p>
          </div>
        </form>
      </div>
      <!-- Registered-Customers End -->
    </div>
  </div>
</div>