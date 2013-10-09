// Enviar email
$(document).ready(function(){
		$(function(){
			$('#send').submit(function(e){
				e.preventDefault();
				var result = $(".result").text("");
				var email = $("#email").val();
				if (validateEmail(email)) {
					var form = $(this);
					var post_url = form.attr('action');
					var post_data = form.serialize();
					$('#loader', form).html('<img src="images/loader.gif" /> Enviando..');
					$.ajax({
						type: 'POST',
						url: post_url, 
						data: post_data,
						success: function(msg) {
							$(form).fadeOut(500, function(){
								form.html(msg).fadeIn();
							});
						}
					});
				}else{
					$("#email").css("border-color", "red");
					$(".result").text("Hubo un problema al enviar tu email. :(");
				}
			});
		});
});
//validar email
function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
//detectar el navegador y sistema operativo de cual se visita  
function detect_os(){ 
    var uAgent = navigator.userAgent.toLowerCase();
    
    if(uAgent.search(/iphone|ipod|ipad/i) > -1|| uAgent.search(/android|blackberry/) > -1){
        if(uAgent.search(/iphone|ipod|ipad/i) > -1)
            return 'iOs';    
        if (uAgent.search(/android/) > -1)
            return 'android';    
        if (uAgent.search(/blackberry/) > -1)
            return 'blackberry';        
    }else
        return 'computer';  
}
