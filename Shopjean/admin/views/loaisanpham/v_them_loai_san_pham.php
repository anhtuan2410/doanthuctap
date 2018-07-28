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
            <input class="text-input small-input kiemtra" type="text" id="ten_loai" name="ten_loai" data_error="Nhập tên loại sản phẩm" />
          </p>
          <p>
            <label>Mô tả</label>
            <textarea name="mo_ta" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input"></textarea>
          </p>
           <p>
            <label>Mã loại cha</label>
            <select name="maloaicha">
               
              <option value="9" > Nam</option>
              <option value="15" > Nữ</option>
          
              </select> 
          </p>
         
          <p>
            <input class="button" type="submit" value="Thêm " name="btnCapnhat" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaisanpham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
