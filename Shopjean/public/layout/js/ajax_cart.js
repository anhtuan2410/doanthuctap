// JavaScript Document
$(document).ready(function() {
            $('a.shop-now,.shop-now,.action-btn').click(function() {

			var $key=$(this).attr("id");
            var $soluonginput="#soluong"+$key;
            var $soLuong=$($soluonginput).val();
            
            var $dongiainput="#dongia"+$key;
            var $dongia=$($dongiainput).val();

            var form_data = {
                id    : $key,
                soluong : $soLuong,
                dongia  : $dongia,
                };
			$.ajax({
                    url:"mua_hang.php",
                    type: 'POST',
                    async : false,
                    data: form_data,
                    dataType: 'json',
                	success: function(data){  
						alert("Đã thêm vào giỏ hàng");                 
                   		$("#SoLuong").text(data['sl'] + " Item");                
                	},
					error: function(error){
						alert(error.statusText)	
					}
            });
            return false;
      }); //click
	  $('#txtPassword2').blur(function(){
		  var $txtPassword1 = $('#txtPassword1').val();
		  var $txtPassword2 = $('#txtPassword2').val();
		  if($txtPassword1 != $txtPassword2)
			$('#kq2').html("Mật khẩu nhập không trùng khớp").css("color","#F00");
	});  
  }); // ready
  //Định dạng số
function formatCurrency(num) 
 {
      var num = num.toString().replace(/\$|\,/g,'');
       if(isNaN(num))
       num = "0";
       sign = (num == (num = Math.abs(num)));
       num = Math.floor(num*100+0.50000000001);
       num = Math.floor(num/100).toString();
       for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
       num = num.substring(0,num.length-(4*i+3))+','+
       num.substring(num.length-(4*i+3));
       return (((sign)?'':'-') + num);
}

//

