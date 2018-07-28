<meta charset="utf-8" />

<?php
//xem cau truc mang 
	//echo '<pre>',print_r($_FILES),'</pre>';
//xu ly upload nhieu hinh
if(isset($_POST) && isset($_FILES) && isset($_FILES['file']['name']) && count($_FILES['file']['name'])>0)	
{
	$arrext = array('gif','jpg','png');
	//ap dung vong lap vao
	$mangfile = $_FILES['file']['name'];
	$mangsize = $_FILES['file']['size'];
	$mangPath = $_FILES['file']['tmp_name'];
	$loi = '';
	
	foreach($mangfile as $key=>$value)
	{
		//tach lay duoi file
		$mangten = explode('.',$value);
		$duoi = strtolower($mangten[count($mangten)-1]);
		$tenmoi = $mangten[0].'_'.time().'('.$key.')'.'.'.$duoi;
		$duongdan = '../images/upload/'.$tenmoi;
		if(in_array($duoi,$arrext))
		{
			//kiem tra kich thuoc
			if($mangsize[$key] <=1024*1024*1024)
			{
				//up file len
				if(move_uploaded_file($mangPath[$key],$duongdan))
				{
					$loi ='';
					
										
				}
				else
				{
					$loi .= '"'.$value.'" upload  xay ra loi<br>';
				}
			}else
			{
				$loi .= '"'.$value.'" kich thuoc file không hợp lệ<br>';
			}
			
		}else
		{
			$loi .= '"'.$value.'" Loại file không hợp lệ<br>';
		}
	}
	
}
?>
<body>

<?php 

if(isset($loi) && $loi!=''){
	echo  $loi ;
}
else{
	if(isset($_POST["capnhap"])){
	echo "<script>alert('Tản ảnh lên thành công')</script>";
	echo "<script>window.location='quantri.php'</script>";
	}
}

 



?>



<form action="" method="post" enctype="multipart/form-data">
	<input type="file" multiple="multiple" name="file[]" />
    <input name="capnhap" type="submit" value="Tải ảnh lên"/>
</form>
</body>
</html>