// JavaScript Document
$(document).ready(function() {
	 $("#timGT").click(function(){
		var $GiaTriDau = $('#gtDau').val();
		var $GiaTriCuoi = $('#gtCuoi').val();
		$.post("xl_gia_san_pham.php",{GiaTriDau:$GiaTriDau,GiaTriCuoi:$GiaTriCuoi},function(data){
			$("#XlGia").html(data);			
		});	
	});
});