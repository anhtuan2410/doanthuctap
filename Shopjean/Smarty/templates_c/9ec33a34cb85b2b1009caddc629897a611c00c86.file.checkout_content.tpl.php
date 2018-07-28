<?php /* Smarty version Smarty-3.1.18, created on 2018-07-16 16:29:33
         compiled from "views\checkout\checkout_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61535b4227d976a3f2-85157867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ec33a34cb85b2b1009caddc629897a611c00c86' => 
    array (
      0 => 'views\\checkout\\checkout_content.tpl',
      1 => 1531067559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61535b4227d976a3f2-85157867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b4227d97c8e99_73642855',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4227d97c8e99_73642855')) {function content_5b4227d97c8e99_73642855($_smarty_tpl) {?><div class="checkout-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title-6 margin-bottom-50">Checkout</h3>
      </div>
    </div>
    <div class="coupon-area">
      <div class="row">
        <div class="col-md-12">
          <div class="coupon-accordion"> 
            <!-- ACCORDION START -->
            <h3>Đăng nhập để đặt hàng</h3>
            <!-- ACCORDION END --> 
            <!-- Genaral Login start -->
            <div class="coupon-info margin-bottom-50">
              <form action="mua_hang_co_tk.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <p class="form-row-first">
                      <label>Tên đăng nhập <span class="required">*</span></label>
                      <input type="text" name="ten_dang_nhap" />
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p class="form-row-last">
                      <label>Mật khẩu <span class="required">*</span></label>
                      <input type="password" name="mat_khau" />
                    </p>
                  </div>
                </div>
                <p><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></p>
                <p class="form-row">
                  <input type="submit" value="Đăng nhập" name="DangNhap" />
                </p>
              </form>
            </div>
            <br />
            <!-- Genaral Login end --> 
            <!-- ACCORDION START -->
             
            <!-- ACCORDION END --> 
          </div>
        </div>
      </div>
    </div>
    <!-- Checkout-Billing-details and order start -->
       <!-- Checkout-Billing-details and order end --> 
  </div>
</div>
<?php }} ?>
