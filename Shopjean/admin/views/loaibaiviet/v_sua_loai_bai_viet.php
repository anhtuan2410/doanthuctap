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
            <label>Tên loại bài viết</label>
            <input value="<?php echo $loai_bai_vietss->ten_loai_bai_viet ?>" class="text-input small-input" type="text" id="ten_loai_bai_viet" name="ten_loai_bai_viet" />
          </p>
          <p>
            <label>Mô tả</label>
            <input value="<?php echo $loai_bai_vietss->mo_ta ?>" class="text-input small-input" type="text" id="mo_ta" name="mo_ta" />
         
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaibaiviet.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
