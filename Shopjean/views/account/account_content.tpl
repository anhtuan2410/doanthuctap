<div class="my-account-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="panel-group  margin-btm-0" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#personal-info" aria-expanded="true"> <i class="pe-7s-bookmarks"></i> <span>Thông tin tài khoản</span> </a> </h4>
            </div>
            <!-- $ho_ten,$gioi_tinh,$ten_dang_nhap, $mat_khau, $email, $so_dien_thoai, $dia_chi -->
            <div id="personal-info" class="panel-collapse collapse in" role="tabpanel">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="billing-address"> {if isset($user)}
                      <form action="cap_nhat_tai_khoan.php" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <input type="text" class="custom-form" name="txtHoTen" value="{$user->ho_ten}" />
                          </div>
                          <div class="col-md-6">
                            <input type="text" class="custom-form" name="txtGioiTinh" value="{if ($user->gioi_tinh == 0)} Nữ {else} Nam {/if}" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="email" class="custom-form" name="txtEmail" value="{$user->email}" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="text" class="custom-form" name="txtDiaChi" value="{$user->dia_chi}" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="text" class="custom-form" name="txtSoDienThoai" value="{$user->so_dien_thoai}" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="password" class="custom-form" name="txtMatKhauHienTai" id="txtMatKhauCu" placeholder="Nhập mật khẩu hiện tại" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <input type="password" class="custom-form" name="txtMatKhauMoi" id="txtPassword1" placeholder="Nhập mật khẩu mới" />
                          </div>
                          <div class="col-md-6">
                            <input type="password" class="custom-form" name="txtNhapLaiMatKhauMoi" id="txtPassword2" placeholder="Nhập lại mật khẩu" />
                            <div id="kq2"></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="hidden" class="custom-submit-2 save" name="txtTenDangNhap" value="{$user->ten_dang_nhap}" />
                            <input type="submit" class="custom-submit-2 save" name="capNhatThongTin" value="Cập nhật tài khoản" />
                          </div>
                        </div>
                      </form>
                      {/if}
                      <div class="row">
                        <div class="col-md-12">
                          <p>{if isset($erro)}{$erro}{/if}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="panel-group margin-btm-0" >
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><i class="pe-7s-news-paper"></i> <span>Hóa đơn khách hàng đã mua</span></h4>
            </div>
          </div>
          <div class="table-content table-responsive">
            <table>
              <thead>
                <tr>
                  <th class="product-name">Hóa đơn</th>
                  <th class="product-price">Tiền</th>
                  <th class="product-price">Ngày lập</th>
                  <th class="product-name">Tình trạng</th>
                  <th class="product-remove">Xem</th>
                </tr>
              </thead>
              {if isset ($hoa_dons)}
              {foreach $hoa_dons as $hd}
              <tbody>
                <tr>
                  <td class="product-name">{$hd->so_hoa_don}</td>
                  <td class="product-price"><span class="amount">{number_format($hd->tri_gia)}</span></td>
                   <td class="product-name">{$hd->ngay_hd}</td>
                   <td class="product-name">{if ($hd->tinh_trang == 1)}Chưa thanh toán{else if ($hd->tinh_trang == 2)}Đã thanh toán{else}Hủy{/if}</td>
                  <td><i><a href="chi_tiet_hoa_don.php?so_hoa_don={$hd->so_hoa_don}">Xem</a></i></td>
                </tr>
              </tbody>
             {/foreach}
             {/if}
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
