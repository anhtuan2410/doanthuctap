<div class="best-sell-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2 class="border-left-right-btm">Mua Nhiều</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"> 
        <!-- best-sell-menu -->
        <ul role="tablist" class="best-sell-menu">
          <li role="presentation" class="active"><a href="#men" role="tab" data-toggle="tab">Nam</a></li>
          <li role="presentation"><a href="#women"  role="tab" data-toggle="tab">Nữ</a></li>
        </ul>
        <!-- best-sell-product -->
        <div class="tab-content best-sell-product">
          <div role="tabpanel" class="tab-pane fade in active" id="men">
            <div class="row">
            {foreach $nam as $sp}
              <div class="col-md-4 col-sm-4 col-xs-12"> 
                <!-- Single-product start -->
                <div class="single-product">
                  <div class="product-photo"> <a href="chi_tiet_san_pham.php?ma_san_pham={$sp->ma_san_pham}"> <img class="primary-photo" src="images/{$sp->hinh}" alt="" /> <img class="secondary-photo" src="images/{$sp->hinh}" alt="" /> </a>
                    <div class="pro-action"> 
                    <input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
        			<input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
                    <!--<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>-->
                    <input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
        			<input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
                    <a href="javascript:void(0)" id="{$sp->ma_san_pham}" class="action-btn"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a>  
                    <!--<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a> -->
                    </div>
                  </div>
                  <div class="product-brief">
                    <h2><a href="chi_tiet_san_pham.php?ma_san_pham={$sp->ma_san_pham}">{$sp->ten_san_pham}</a></h2>
                    <div class="product-brief-inner">
                      <h3>Giá: {number_format($sp->don_gia)}</h3>
                      <div class="pro-rating"> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-2"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
			{/foreach}
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="women">
            <div class="row">
              {foreach $nu as $sp}
              <div class="col-md-4 col-sm-4 col-xs-12"> 
                <!-- Single-product start -->
                <div class="single-product">
                  <div class="product-photo"> <a href="chi_tiet_san_pham.php?ma_san_pham={$sp->ma_san_pham}"> <img class="primary-photo" src="images/{$sp->hinh}" alt="" /> <img class="secondary-photo" src="images/{$sp->hinh}" alt="" /> </a>
                    <div class="pro-action"> 
					<input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
        			<input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
                    <!--<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>-->
                    <input type="hidden" id="dongia{$sp->ma_san_pham}" value="{$sp->don_gia}"/>
        			<input type="hidden" value="1" id="soluong{$sp->ma_san_pham}"/>
                    <a href="javascript:void(0)" id="{$sp->ma_san_pham}" class="action-btn"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a>  
                    </div>
                  </div>
                  <div class="product-brief">
                    <h2><a href="#">{$sp->ten_san_pham}</a></h2>
                    <div class="product-brief-inner">
                      <h3>Giá: {number_format($sp->don_gia)}</h3>
                      <div class="pro-rating"> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-1"></i></a> <a href="#"><i class="sp-star rating-2"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
			{/foreach}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
