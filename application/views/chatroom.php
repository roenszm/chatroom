<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>ChatRoom</title>

		<script src="<?= base_url()?>js/jquery1.9.1.min.js"></script>
		<script src="<?= base_url()?>js/main.js"></script>
		<link href="<?= base_url()?>css/main.css" rel="stylesheet" type="text/css" />
		
	</head>
	
	<body>
		
		<div id="chatroom">
			
			<input id="mid" type="text" value=<?= $mid; ?> />
			
			<div id="showmessage">
				
			</div>
			
			<div id="sendbox">
				
				<textarea id="sendmessage" placeholder= "Input message..."; ></textarea>
				
				<input id="sendbutton" type="button" value="Send"/>
			
				<label class="setname">Set Name</label><input id="name" type="text" />
				
				<label class="notice">Message and name should not be empty!</label>
			</div>
		
			<div id="sidebox">
			
			</div>
		
		
		</div>
	
	</body>

</html>
