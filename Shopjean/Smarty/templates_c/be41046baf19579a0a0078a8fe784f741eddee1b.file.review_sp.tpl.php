<?php /* Smarty version Smarty-3.1.18, created on 2018-07-28 16:10:28
         compiled from "views\product\review_sp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6705b499a3ee63b39-12177036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be41046baf19579a0a0078a8fe784f741eddee1b' => 
    array (
      0 => 'views\\product\\review_sp.tpl',
      1 => 1532787025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6705b499a3ee63b39-12177036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b499a3eedde77_35001190',
  'variables' => 
  array (
    'san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b499a3eedde77_35001190')) {function content_5b499a3eedde77_35001190($_smarty_tpl) {?><div class="single-product-reviews-area margin-bottom-80">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="discription-reviews-tab">
                <!-- Nav tabs -->
                <ul class="reviews-tab-menu" role="tablist">
                  <li role="presentation" class="active"><a href="#description" data-toggle="tab">Mô tả sản phẩm</a></li>
                  <li role="presentation"><a href="#reviews"  data-toggle="tab">Nhận xét</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="description">
                    <div class="single-pro-product-description">
                      <h2 class="title-4">Chi tiết sản phẩm</h2>
                      <p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->mo_ta_chi_tiet;?>
 </p>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="reviews">
                    <div class="product-page-comments">
                      
                  
                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=378495575965068&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                    <div align="center" width="auto" class="fb-comments" data-numposts="4"></div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php }} ?>
