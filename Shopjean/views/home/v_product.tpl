<div class="product-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2 class="border-left-right-btm">Tất cả sản phẩm</h2>
        </div>
      </div>
    </div>
  </div>
  <div id="active-product" class="product-slider"> 
    <!-- Single-product start -->
    {foreach $san_phams as $sp}
    <div class="single-product">
      <div class="product-photo"> <a href="chi_tiet_san_pham.php?ma_san_pham={$sp->ma_san_pham}"> <img class="primary-photo" src="images/{$sp->hinh}" alt="" /> <img class="secondary-photo" src="images/{$sp->hinh}" alt="" /> </a>
        <div class="pro-action">
        <input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
        <input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
        
        <a class="action-btn" href="javascript:void(0)" id="{$sp->ma_san_pham}"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a> 
         </div>
      </div>
      <div class="product-brief">
        <div class="pro-rating"> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-2"></i></a> </div>
        <h2><a href="chi_tiet_san_pham.php?ma_san_pham={$sp->ma_san_pham}">{$sp->ten_san_pham}</a></h2>
        <h3>Giá: {number_format($sp->don_gia)}</h3>
      </div>
    </div>
    {/foreach}
    <!-- Single-product end --> 
  </div>
</div>
