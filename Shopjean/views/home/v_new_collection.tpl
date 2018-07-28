<div class="new-collection-area fix margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2 class="border-left-right-btm">Sản phẩm mới</h2>
        </div>
      </div>
    </div>
  </div>
  {for $i=0 to 2 step 1}
  <div class="col-lg-4 col-md-6 col-sm-6 padding-0">
    <div class="single-collection">
      <div class="collection-photo"> <a href="chi_tiet_san_pham.php?ma_san_pham={$san_pham_new[$i]->ma_san_pham}"><img src="images/{$san_pham_new[$i]->hinh}" alt="" height="200"/></a> </div>
      <div class="collection-brief">
        <div class="text-right"> <span class="new">new</span> </div>
        <h2><br />
          <span>{$san_pham_new[$i]->ten_san_pham}</span></h2>
        <ul>
          <li>{$san_pham_new[$i]->mo_ta_tom_tat}</li>
        </ul>
        <input type="hidden" id="dongia{$san_pham_new[$i]->ma_san_pham}" value="{$san_pham_new[$i]->don_gia}"/>
        <input type="hidden" value="1" id="soluong{$san_pham_new[$i]->ma_san_pham}"/>
        <a class="shop-now active-shop-now" href="javascript:void(0)" id="{$san_pham_new[$i]->ma_san_pham}">Mua ngay</a> </div>
    </div>
  </div>
  {/for} </div>
