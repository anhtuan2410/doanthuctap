<div class="content-box-header">
  <h3><?php $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
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
            <input value=" <?php echo $baivietsss->tieu_de ?>" class="text-input small-input kiemtra" data_error="Nhập tiêu đề bài viết" type="text" id="tieu_de" name="tieu_de" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea   name="tom_tat" cols="50" rows="3" class="text-input large-input ckeditor " id="medium-input"><?php echo $baivietsss->noi_dung_tom_tat ?></textarea>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input"><?php echo $baivietsss->noi_dung_chi_tiet ?></textarea>
          </p>
        
           <p>
            <label>Ngày xuất bản</label>
            <input value="<?php echo $baivietsss->ngay_xuat_ban ?>" class="text-input small-input kiemtra" data_error="Nhập ngày xuất bản" type="date" id="ngay_xuat_ban" name="ngay_xuat_ban" />
          </p>
          <p>
            <label>Chọn hình sản phẩm</label>
            <input type="file" name="hinhbv" id="hinhbv" />
            <div class="image-holder" id="image-holder"></div>
            </p>
          <p>
            <label>Xuất bản</label>
            <input value="<?php echo $baivietsss->xuat_ban ?>" class="text-input small-input" type="text" id="xuat_ban" name="xuat_ban" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat"  />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='baiviet.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
