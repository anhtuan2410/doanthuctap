<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
        <fieldset>
          <strong>
          <font color="#993300">
          <p>
         
            <label>Số hóa đơn nhập: <?php echo $hoa_don->so_hoa_don_nhap ?></label> 
            <label><span style="margin-left:50px">Ngày lập hóa đơn nhập: <?php echo date("d/m/Y",strtotime($hoa_don->ngay_tao)) ?></span></label>
          </p>
         
          <p>
            <label>Họ tên người nhập: <?php echo $hoa_don->ho_ten ?></label>
          </p>  
          <p>
             
            <label><span style="margin-left:20px">Điện thoại: <?php echo $hoa_don->so_dien_thoai ?></span></label>
            
          </p>
          </font>
          <strong>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        <table>
    <caption>
    <p>
    <hr />
    <label><strong>Chi tiết hóa đơn nhập</strong></label>
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên sản phẩm</th>
         
          <th>Số lượng nhập</th>
          <th> Giá nhập</th>
        
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="3">
            <p><input class="button print" type="button" value="In hóa đơn nhập" name="btnIn" onclick="window.print()" /></p>
            <div class="clear"></div>
            </td>
            <td colspan="3">
            
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($chi_tiets as $ct)
		{
			
		?>	
        <tr>
           <td style="vertical-align:middle"><?php echo $ct->id; ?></td>
          <td style="vertical-align:middle"><?php echo $ct->ten_san_pham; ?></td>
          
          <td style="vertical-align:middle"><?php echo $ct->so_luong_nhap ?></td>
          <td style="vertical-align:middle"><?php echo number_format($ct->gia_nhap) ?> VND</td>
          
        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
  </div>
  
</div>
