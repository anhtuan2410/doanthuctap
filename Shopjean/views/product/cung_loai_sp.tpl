<div class="single-product-related-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="related-product-title">
          <h3>Sản phẩm cùng loại</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="active-related-product shop-grid"> 
    <!-- Single-product start --> 
    {foreach $san_phams as $sp}
    <div class="single-product">
      <div class="product-photo"> <a href="chi-tiet-san-pham/{$sp->ma_san_pham}"> <img class="primary-photo" src="images/{$sp->hinh}" alt="" /> <img class="secondary-photo" src="images/{$sp->hinh}" alt="" /> </a>
        <div class="pro-action">
          <input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
          <input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
          <!--<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>-->
          <input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
          <input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
          <a href="javascript:void(0)" id="{$sp->ma_san_pham}" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a> </div>
      </div>
      <div class="product-brief">
        <h2><a href="#">{$sp->ten_san_pham}</a></h2>
        <h3>Giá: {number_format($sp->don_gia)}</h3>
      </div>
    </div>
    {/foreach} 
    <!-- Single-product end --> 
  </div>
</div>
