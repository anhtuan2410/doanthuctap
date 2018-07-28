<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
    <form method="post">
    <p>
    <label>Nhập tên loại sản phẩm:</label> <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã loại</th>
          <th>Tên loại</th>
          <th>Mô tả</th>
          <th>Mã loại cha</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination">  </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($loai_san_phams as $loai)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $loai->ma_loai; ?></td>
          <td><a href="sualoaisanpham.php?ma_loai=<?php echo $loai->ma_loai; ?>" title="Edit"><?php echo $loai->ten_loai ?></a></td>
          <td><?php echo $loai->mo_ta ?></td>
           <td><?php echo $loai->ma_loai_cha ?></td>
          <td><!-- Icons --> 
            <a href="sualoaisanpham.php?ma_loai=<?php echo $loai->ma_loai; ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="xoaloaisanpham.php?ma_loai=<?php echo $loai->ma_loai; ?>" title="Delete" onclick="" > 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
   
  </div>
  
</div>
