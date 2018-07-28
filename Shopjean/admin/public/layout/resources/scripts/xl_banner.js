$(document).ready(function() {
    $('.capNhatBanner1').click(function(){
		var $banner1 = $('#banner1').val();
		var $id = $(this).attr('id');
		$.post("xl_banner.php",{link_anh:$banner1,id:$id},function(data){
				$('#kq').html(data).css("color","#00F");
				
		});
	});
	$('.capNhatBanner2').click(function(){
		var $banner2 = $('#banner2').val();
		var $id = $(this).attr('id');
		
		$.post("xl_banner.php",{link_anh:$banner2,id:$id},function(data){
				$('#kq').html(data).css("color","#00F");
		});
	});
	$('.capNhatBanner3').click(function(){
		var $banner3 = $('#banner3').val();
		var $id = $(this).attr('id');
		
		$.post("xl_banner.php",{link_anh:$banner3,id:$id},function(data){
				$('#kq').html(data).css("color","#00F");
		});
	});
});