<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 18:18:16
         compiled from "views\account\account_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161935b4239488a6020-74482938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2732819abbaa77cd8718d61a1b77fd193d9e2ce8' => 
    array (
      0 => 'views\\account\\account_content.tpl',
      1 => 1490328711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161935b4239488a6020-74482938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'erro' => 0,
    'hoa_dons' => 0,
    'hd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b423948946df4_43438254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b423948946df4_43438254')) {function content_5b423948946df4_43438254($_smarty_tpl) {?><div class="my-account-area">
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
                    <div class="billing-address"> <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                      <form action="cap_nhat_tai_khoan.php" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <input type="text" class="custom-form" name="txtHoTen" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ho_ten;?>
" />
                          </div>
                          <div class="col-md-6">
                            <input type="text" class="custom-form" name="txtGioiTinh" value="<?php if (($_smarty_tpl->tpl_vars['user']->value->gioi_tinh==0)) {?> Nữ <?php } else { ?> Nam <?php }?>" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="email" class="custom-form" name="txtEmail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="text" class="custom-form" name="txtDiaChi" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->dia_chi;?>
" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="text" class="custom-form" name="txtSoDienThoai" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->so_dien_thoai;?>
" />
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
                            <input type="hidden" class="custom-submit-2 save" name="txtTenDangNhap" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ten_dang_nhap;?>
" />
                            <input type="submit" class="custom-submit-2 save" name="capNhatThongTin" value="Cập nhật tài khoản" />
                          </div>
                        </div>
                      </form>
                      <?php }?>
                      <div class="row">
                        <div class="col-md-12">
                          <p><?php if (isset($_smarty_tpl->tpl_vars['erro']->value)) {?><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
<?php }?></p>
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
              <?php if (isset($_smarty_tpl->tpl_vars['hoa_dons']->value)) {?>
              <?php  $_smarty_tpl->tpl_vars['hd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hoa_dons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hd']->key => $_smarty_tpl->tpl_vars['hd']->value) {
$_smarty_tpl->tpl_vars['hd']->_loop = true;
?>
              <tbody>
                <tr>
                  <td class="product-name"><?php echo $_smarty_tpl->tpl_vars['hd']->value->so_hoa_don;?>
</td>
                  <td class="product-price"><span class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['hd']->value->tri_gia);?>
</span></td>
                   <td class="product-name"><?php echo $_smarty_tpl->tpl_vars['hd']->value->ngay_hd;?>
</td>
                   <td class="product-name"><?php if (($_smarty_tpl->tpl_vars['hd']->value->tinh_trang==1)) {?>Chưa thanh toán<?php } elseif (($_smarty_tpl->tpl_vars['hd']->value->tinh_trang==2)) {?>Đã thanh toán<?php } else { ?>Hủy<?php }?></td>
                  <td><i><a href="chi_tiet_hoa_don.php?so_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hd']->value->so_hoa_don;?>
">Xem</a></i></td>
                </tr>
              </tbody>
             <?php } ?>
             <?php }?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
