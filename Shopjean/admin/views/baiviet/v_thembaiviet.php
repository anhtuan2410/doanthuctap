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
            <label> Loại bài viết  </label>
              <select name="loai_bai_viet">
               <?php foreach ($loaibaiviet as $key ) {
             ?>
               
              <option value="<?php echo $key->ma_loai_bai_viet ?>" > <?php echo $key->ten_loai_bai_viet ?></option>
              <?php } ?>
          
              </select> 
          </p>
          <p>
            <label>Tiêu đề bài viết</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tiêu đề bài viết" type="text" id="tieu_de" name="tieu_de" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea name="tom_tat" cols="50" rows="3" class="text-input large-input ckeditor " id="medium-input"></textarea>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input"></textarea>
          </p>
          <p>
            <label>Chọn hình sản phẩm</label>
            <input type="file" name="hinhbv" id="hinhbv" />
            <div class="image-holder" id="image-holder"></div>
            </p>


    
         
    
          <p>
            <label>Xuất bản</label>
            <input placeholder="1:Xuất bản" class="text-input small-input" type="number" maxlength="2" id="xuat_ban" name="xuat_ban" />
          </p>
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='baiviet.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
