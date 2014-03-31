$(document).ready(function(){
	$('form').each(function(){
		if(!$('input[name=honeypot]', $(this)).length){
			$(this).append("<input type='hidden' name='honeypot' value=''>");
		}
		$(this).bind("submit", function(){
			if(!$('input[name=human_submitted]', $(this)).length){
				$(this).append("<input type='hidden' name='human_submitted' value='1'>");	
			}
			
		});
	});

	$.ajaxSetup({
		data:{ human_submitted:1 },
		beforeSend: function(jqXHR, Obj){
	    	Obj.data += "&human_submitted=1"
    	}
	});

});