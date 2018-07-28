<div class="shop-content" id="XlGia"> 
  <!-- product-toolbar start -->
  <!-- product-toolbar end --> 
  <!-- Shop-product start -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid-view">
      <div class="row shop-grid"> {foreach $sp_nams as $sp} 
        <!-- Single-product start -->
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="single-product">
            <div class="product-photo"> <a href="chi-tiet-san-pham/{$sp->ma_san_pham}"> <img class="primary-photo" src="images/{$sp->hinh}" alt="" /> <img class="secondary-photo" src="images/{$sp->hinh}" alt="" /> </a>
              <div class="pro-action">
                <input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
                <input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
                <!--<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>-->
                <input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
                <input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
                <a href="javascript:void(0)" id="{$sp->ma_san_pham}" class="action-btn"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a> </div>
            </div>
            <div class="product-brief">
              <h2><a href="chi-tiet-san-pham/{$sp->ma_san_pham}">{$sp->ten_san_pham}</a></h2>
              <h3>Giá: {number_format($sp->don_gia)}</h3>
            </div>
          </div>
        </div>
        <!-- Single-product end --> 
        {/foreach} </div>
    </div>
  </div>
  <!-- Shop-product end --> 
  <!-- product-toolbar start -->
  <div class="product-toolbar btm-border"> 
    <!-- Shop-menu --> 
    <!-- Pagination -->
    <div class="shop-pagination">
      {$list_nam}
    </div>
  </div>
  <!-- product-toolbar end --> 
</div>
