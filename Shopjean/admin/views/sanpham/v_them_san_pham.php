<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
            <p>
            <label>Tên sản phẩm</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên sản phẩm" type="text" id="ten_san_pham" name="ten_san_pham" />
          </p>
          <p>
            <label> Loại người dùng  </label>
              <select name="loainguoidung">
               
              <option value="9" > Nam</option>
              <option value="15" > Nữ</option>
          
              </select> 
          </p>
          
          <p>
            <label> Loại sản phẩm </label>
              <select name="loaisanpham">
                <?php foreach ($sps as $key1 ) {
                 
                 ?>
              <option value="<?php  echo $key1->ma_loai?>" > <?php echo $key1->ten_loai ?></option>
           <?php }?>
              </select> 
          </p>
          
          <p>
            <label>Mô tả tóm tắt</label>
            <textarea name="mo_ta_tom_tat" cols="50" rows="3" class="text-input large-input  " id="mo_ta_tom_tat"></textarea>
          <p>
            <label>Mô tả chi tiết</label>
            <textarea name="mo_ta_chi_tiet" cols="50" rows="5" class="text-input large-input " id="mo_ta_chi_tiet"></textarea>
          </p>
          <p>
            <label>Đơn giá</label>
            <input class="text-input small-input kiemtra" data_error="Nhập đơn giá" type="number" id="don_gia" name="don_gia" />
          </p>
          <p>
            <label>Chọn hình sản phẩm</label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
            </p>
            
          <p>
            <label>Số lần xem</label>
            <input class="text-input small-input kiemtra" data_error="Nhập số lần xem" type="number" id="so_lan_xem" name="so_lan_xem" />
          </p>
           
      
         
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='sanpham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
