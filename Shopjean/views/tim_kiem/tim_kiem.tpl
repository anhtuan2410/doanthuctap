<br>

<div class="table-content table-responsive">
  <table>
    <thead>
      <tr>
        <th class="product-thumbnail">Hình</th>
        <th class="product-name">Tên sản phẩm</th>
        <th class="product-price">Đơn giá</th>
        <th class="product-price">Xem sản phẩm</th>
      </tr>
    </thead>
    {foreach $chi_tiets as $ct}
    <tbody>
      <tr>
        <td class="product-thumbnail"><a href="#"><img src="images/{$ct->hinh}" alt="" /></a></td>
        <td class="product-name"><a href="#">{$ct->ten_san_pham}</a></td>
        <td class="product-price"><span class="amount">Giá: {number_format($ct->don_gia)}</span></td>
        <td class="product-price"><a href="chi_tiet_san_pham.php?ma_san_pham={$ct->ma_san_pham}">Xem</a></td>
      </tr>
    </tbody>
    {/foreach}
  </table>
  <center><a href="index.php">Quay Lại</a></center>
</div>

<br>
