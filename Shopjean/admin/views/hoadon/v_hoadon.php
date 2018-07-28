<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post">
    <table>
    <caption>
    <p>
    <label>
    Tra cứu đơn hàng: (1: Chưa thanh toán - 0: Đã thanh toán - 2: Hủy đơn hàng)
    </label> 
    <input type="text" name="tim" class="text-input small-input" value="<?php echo @$_POST["tim"] ?>" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </caption>
      <thead>
        <tr>
          <th>Số hóa đơn</th>
          <th>Tên khách hàng</th>
          <th>Ngày hóa đơn</th>
          <th>Trị giá</th>
          
          <th>Tình trạng</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="3">
            <p><input class="button" type="submit" value="Cập nhật đơn hàng" name="btnCapnhat" /></p>
            <div class="clear"></div>
            </td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($hoa_dons as $hd)
		{
		?>	
        <tr>
          <td>
          <?php echo $hd->so_hoa_don; ?>
          <a href="chitiethoadon.php?so_hoa_don=<?php echo $hd->so_hoa_don ?>" title="Xem chi tiết hóa đơn">
	          <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
          </a>
          <input type="hidden" value="<?php echo $hd->so_hoa_don ?>" name="so_hoa_don[]" />
          </td>
          <td><?php echo $hd->ho_ten ?></td>
          <td><?php echo date("d/m/Y",strtotime($hd->ngay_hd)) ?></td>
          <td><?php echo number_format($hd->tri_gia) ?></td>
          
          <td><!-- Icons --> 
          <select name="ds[]">
          <option value="1" <?php echo($hd->tinh_trang==1)?"selected":"" ?> >Chưa thanh toán</option>
          <option value="0" <?php echo($hd->tinh_trang==0)?"selected":"" ?>>Đã thanh toán</option>
          <option value="2" <?php echo($hd->tinh_trang==2)?"selected":"" ?>>Hủy đơn hàng</option>
          </select>  
          </td>
        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
   </form>
  </div>
  
</div>
