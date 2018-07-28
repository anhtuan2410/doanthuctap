<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_loai`, `ten_loai`, `mo_ta`, `hinh`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên loại</label>
            <input class="text-input small-input" type="text" id="ten_loai" name="ten_loai" 
            value="<?php echo $loai_san_phamss->ten_loai ?>" />
          </p>
          <p>
            <label>Mô tả</label>
            <textarea name="mo_ta" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input">
            <?php echo $loai_san_phamss->mo_ta ?>
            </textarea>
          </p>
           <p>
            <label>Mã loại cha</label>
            <select name="maloaicha">
               
              <option value="9" > Nam</option>
              <option value="15" > Nữ</option>
          
              </select> 
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaisanpham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
