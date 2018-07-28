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
    <label>Nhập tiêu đề tin:</label> <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã loại bài viết</th>
          <th>Tên loại bài viết</th>
          <th>Mô tả</th>
       
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> <?php echo $lst ?> </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($loai_bai_viets as $tin)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $tin->ma_loai_bai_viet; ?></td>
          <td><a href="sualoaibaiviet.php?ma_loai=<?php echo $tin->ma_loai_bai_viet; ?>" title="Edit"><?php echo $tin->ten_loai_bai_viet ?></a></td>
          <td><?php echo $tin->mo_ta ?></td>
         
          <td><!-- Icons --> 
            <a href="sualoaibaiviet.php?ma_loai=<?php echo $tin->ma_loai_bai_viet ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="xoaloaibaiviet.php?ma_loai=<?php echo $tin->ma_loai_bai_viet ?>" title="Delete" onclick=""> 
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
