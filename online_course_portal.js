

$("#show_table").on("click",function(){


	$.post("home/users",{},function(data){

		$("#user_div_table").val(data);


	},"text");





})