<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
   
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
         
            <p>
            <label> Sản phẩm  </label>
              <select name="sanpham">
               <?php foreach ($sanphams as $key ) {
             ?>
               
              <option value="<?php echo $key->ma_san_pham ?>" > <?php echo $key->ten_san_pham ?></option>
              <?php } ?>
          
              </select> 
          </p>
          <p>
            <label>Giá nhập</label>
            <input class="text-input small-input kiemtra" data_error="Nhập giá" type="number" id="gianhap" name="gianhap" />
          </p>
          
          
            
        <p>
            <label>Số lượng nhập</label>
            <input class="text-input small-input kiemtra" data_error="Nhập số lượng" type="number" id="slnhap" name="slnhap" />
          </p>

    
      
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='chitiethoadonnhap.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
     
  </div>
  
</div>
