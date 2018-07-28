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
            <label>Tên loại người dùng</label>
            <input value="<?php echo $loainguoidungss->ten_loai_nguoi_dung ?>" class="text-input small-input" type="text" id="ten_loai_nguoi_dung" name="ten_loai_nguoi_dung" />
          </p>
         
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loainguoidung.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
