
function refresh(){
	
	var mid = $("#mid").val();
	$.post(
		"http://localhost/chatroom/index.php/main/load",	
		{
			mid: mid
		},
		function(data,status){
			if (status=="success"){
				var message = val(data);
				$("#mid").val(message['id']);
				$("#showmessage").append(message);
				
			} 
			refresh();
		}
	);
	
}

function sendmessage(){
		
	var message = $("#sendmessage").val();
	var name = $("#name").val();
		
	$.post(
		"http://localhost/chatroom/index.php/main/savemessage",
		{
			message: message,
			name: name
		},
		function(data,status){
			if (status=="success") {
				$("#sendmessage").val("");
			} else {
				$("#sendbutton").val("Fail!");
			}
		}
	);
	
	refresh();
			
}





$(document).ready(function(){
	
	$("#sendbutton").click(function(){
		sendmessage();	
	});
	
	

	
	
});


$(document).ready(function(){
	
	refresh();
	
	
	
});




