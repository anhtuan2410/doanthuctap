
<?php 
include("models/m_nguoi_dung.php");
$a=new M_user();

  
      
  
?>
<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
   
    <table>
    <caption>
  
    </caption>
      <thead>
        <tr>
          <th>Số hóa đơn</th>
          <th>Người tạo</th>
          <th>Ngày tạo</th>
        
        </tr>
      </thead>
      
        <?php

        foreach ($hoadonnhaps as $hd)
		{

      $ten=$a->Doc_user_theo_ma_nd($hd->nguoi_tao);
   
		?>	
        <tr>
          <td>
          <?php echo $hd->so_hoa_don_nhap; ?>
          
          </td>
          <td> <?php echo $ten->ho_ten ?></td>
          <td><?php echo date("d/m/Y",strtotime($hd->ngay_tao)) ?></td>
           <td><a href="chitiethoadonnhap.php?so_hoa_don=<?php echo $hd->so_hoa_don_nhap ?>" title="Xem chi tiết hóa đơn nhập">
            <img width="30px" height="30px" src="public/layout/resources/images/icons/clipboard-list-outline.png" alt="List" />
          </a> </td>
          <td><a href="themchitiethoadonnhap.php?so_hoa_don=<?php echo $hd->so_hoa_don_nhap ?>" title="Thêm chi tiết hóa đơn nhập">
            <img width="30px" height="30px" src="public/layout/resources/images/icons/add.png" alt="Edit" />
          </a> </td>

        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
   
  </div>
  
</div>
