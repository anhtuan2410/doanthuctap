<div class="single-product-aea margin-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="single-product-tab-content">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="img-one"> <img src="images/{$san_pham->hinh}" alt="" />
                            <a href="images/{$san_pham->hinh}" data-lightbox="roadtrip" data-title="Ảnh"> <span class="view-full-screen"><i class="sp-full-view"></i> view full screen</span> </a>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="img-two"> <img src="images/{$san_pham->hinh}" alt="" />
                            <a href="images/{$san_pham->hinh}" data-lightbox="roadtrip" data-title="Ảnh"> <span class="view-full-screen"><i class="sp-full-view"></i> view full screen</span> </a>
                        </div>
                      
                    </div>
                    <!-- Nav tabs -->
                    <ul class="">
                        <li class="active"><a href="#img-one" data-toggle="tab"><img src="images/{$san_pham->hinh}" alt="" /></a></li>
                        <li><a href="#img-two" data-toggle="tab"><img src="images/{$san_pham->hinh}" alt="" /></a></li>
                        <li><a href="#img-three" data-toggle="tab"><img src="images/{$san_pham->hinh}" alt="" /></a></li>
                        <li><a href="#img-four" data-toggle="tab"><img src="images/{$san_pham->hinh}" alt="" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="single-product-description">
                    <h3 class="title-3">{$san_pham->ten_san_pham}</h3>
                    <h4>Giá: {number_format($san_pham->don_gia)}</h4>
                   
                    <div class="pro-size"> <span>Size</span> <a href="#">xs</a> <a href="#">s</a> <a href="#">ml</a> <a href="#">xl</a> <a href="#">x</a> </div>
                    <div class="product-counts fix margin-top-80">
                        <form action="#">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" id="soluong{$san_pham->ma_san_pham}" />
                            </div>
                        </form>
                        <div class="single-pro-add-cart">
                            <a class="shop-now" href="javascript:void(0)" id="{$san_pham->ma_san_pham}">Thêm giỏ hàng</a>
                            <input type="hidden" id="dongia{$san_pham->ma_san_pham}" value="{$san_pham->don_gia}" />
                        </div>
                        <br />
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
