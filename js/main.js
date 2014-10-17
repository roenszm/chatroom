
function refresh(){
	
	var mid = $("#mid").val();
	
	$.post(
		"http://localhost/chatroom/index.php/main/load",	
		{
			mid: mid
		},
		function(data,status){
			if (status=="success"){
				
				if (data!='') {
					var message = eval('(' + data + ')');
					
					$("#showmessage").append('<div class="item"><span class="name">' + message['name'] + '</span><span class="sendtime">' + message['time'] + '</span><div class="content">' + message['content'] + '</div></div>');
					
					$("#mid").val(message['id']);
					
					$("#showmessage").scrollTop($("#showmessage")[0].scrollHeight);
				}
				
			} 
			setTimeout('refresh()',200);
		}
	);
	
}

function sendmessage(){
		
	var message = $("#sendmessage").val();
	var name = $("#name").val();
		
	if ($.trim(message)!=''&&$.trim(name)!='') {
		$('label.notice').css('display','none');
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
	} else {
		$('label.notice').css('display','block');
	}
	
			
}


$(document).ready(function(){
	
	$("#sendbutton").click(function(){
		sendmessage();	
	});
	
	$('#sendmessage').keypress(function(e){
		if (e.ctrlKey && e.which == 13 || e.which == 10) 
			sendmessage();
	});
	
});


$(document).ready(function(){
	
	refresh();
	
});




