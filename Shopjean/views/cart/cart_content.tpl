

<div class="shopping-cart-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="th_giohang"> {assign var=tien_san_pham value=0}
        {if isset($ds_san_pham)}
        <form action="gio_hang.php" method="post">
          <div class="table-content table-responsive">
            <table>
              <thead>
                <tr>
                  <th class="product-thumbnail">Hình</th>
                  <th class="product-name">Tên sản phẩm</th>
                  <th class="product-price">Giá</th>
                  <th class="product-quantity">Số lượng</th>
                  <th class="product-remove">Hành động</th>
                </tr>
              </thead>
              {foreach $ds_san_pham as $san_pham}
              <tbody>
                <tr>
                  <td class="product-thumbnail"><a href="#"><img src="images/{$san_pham->hinh}" alt="" /></a></td>
                  <td class="product-name"><a href="#">{$san_pham->ten_san_pham}</a></td>
                  <td class="product-price"><span class="amount">Giá: {number_format($san_pham->don_gia)}</span></td>
                  <td class="product-quantity"><input type="number"  max="100" min=1  value="{$san_pham->so_luong}" id="soluonggiohang{$san_pham->ma_san_pham}" name="soluonggiohang{$san_pham->ma_san_pham}"/></td>
                  <input type="hidden" id="dongiagiohang{$san_pham->ma_san_pham}" value="{$san_pham->don_gia}" name="dongiagiohang{$san_pham->ma_san_pham}"/>
                  <input type="hidden" value="{$tien_san_pham = $tien_san_pham + $san_pham->so_luong*$san_pham->don_gia}" />
                  <td class="product-remove"><i><a class="pe-7s-close btnxoa" href="javascript:void(0)" id="{$san_pham->ma_san_pham}"></a></i></td>
                </tr>
              </tbody>
              {/foreach}
            </table>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="coupon">
                <input type="submit" name="btnCapnhat" value="Cập nhật giỏ hàng" />
                <input type="submit" name="btnxoagiohang" value="Xóa giỏ hàng" />
                <!-- <span>do you have coupon code</span>
                <input type="text" /> --> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-md-offset-7">
              <div class="cart-totals">
                <h2>Thành tiền</h2>
                <div class="table-cart table-responsive">
                  <table>
                    <tbody class="cart-totals-list">
                      <tr class="cart-total">
                        <td align="center">Phí vận chuyển</td>
                        <td align="center"> FREE </td>
                      </tr>
                    </tbody>
                    <tbody class="cart-totals-list">
                      <tr class="cart-total">
                        <td align="center">Tổng tiền</td>
                        <td align="center"> {number_format($tien_san_pham)} đ</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="we-proceed-to-checkout"> <a href="checkout.php">Đặt hàng</a> </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

            <!-- Nhập địa chỉ email người nhận tiền (người bán) -->
            <input type="hidden" name="business" value="tuanseoeakar@gmail.com">

            <!-- tham số cmd có giá trị _xclick chỉ rõ cho paypal biết là người dùng nhất nút thanh toán -->
            <input type="hidden" name="cmd" value="_xclick">

            <!-- Thông tin mua hàng. -->
           
            <input type="hidden" name="item_name" value="{$ten}">
            
      <!--Trị giá của giỏ hàng, vì paypal không hỗ trợ tiền việt nên phải đổi ra tiền $-->
        <input type="hidden" name="amount"  value="{$tien_san_pham/22000}">
      <!--Loại tiền-->
      
            <input type="hidden" name="currency_code" value="USD">

      <!--Đường link mình cung cấp cho Paypal biết để sau khi xử lí thành công nó sẽ chuyển về theo đường link này-->
          <input type="hidden" name="return" value="http://localhost:8080/shopjean/checkout2.php">
      <!--Đường link mình cung cấp cho Paypal biết để nếu  xử lí KHÔNG thành công nó sẽ chuyển về theo đường link này-->
      
            <!-- Nút bấm. -->
            <div  class="we-proceed-to-checkout">
            <input type="submit" name="submit" value="Thanh toán qua Paypal">
          </div>
  </form>
        {/if}
        {if !isset($ds_san_pham)}
        <h3 align="center">Bạn chưa chọn món ăn nào chọn giỏ</h3>
        {/if} </div>
    </div>
  </div>
</div>
