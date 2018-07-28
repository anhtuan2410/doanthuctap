

<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table >
    <caption>
    <form method="post">
    <p>
    <label>Nhập tên sản phẩm:</label> <input type="text" name="tim" class="text-input small-input" />
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Mã loại cha</th>
          <th>Mã loại</th>
       
          <th>Đơn giá</th>
          <th>Hình</th>
          <th>Sản phẩm mới</th>
          <th>Số lần xem</th>
          <th>Ngày tạo</th>
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
        foreach ($sanphams as $tin)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $tin->ma_san_pham; ?></td>
           <td><?php echo $tin->ten_san_pham; ?></td>
           <td><?php echo $tin->ma_loai_cha; ?></td>
            <td><?php echo $tin->ma_loai; ?></td>
        
        
          <td><?php echo number_format($tin->don_gia)."đ" ?></td>
          <td align="center"><img  width="100"src="../images/<?php echo $tin->hinh ?>"</td>
           <td><?php echo $tin->san_pham_moi ?></td>          
            <td><?php echo $tin->so_lan_xem ?></td>
             <td><?php echo $tin->ngay_tao ?></td>
          <td><!-- Icons --> 
            <a href="suasanpham.php?ma_sp=<?php echo $tin->ma_san_pham ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="xoasanpham.php?ma_sp=<?php echo $tin->ma_san_pham ?>?>" title="Delete" onclick=""> 
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
