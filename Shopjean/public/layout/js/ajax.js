function Timmonan(gtTim)
{
	// ajax
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("kq").innerHTML=xmlhttp.responseText;
		}
	}
	/* sử dụng POST */
	xmlhttp.open("POST","xl_tai_khoan.php",true);
	var data = new FormData();
	data.append('ten_dang_nhap',gtTim);
	xmlhttp.send(data);
}
