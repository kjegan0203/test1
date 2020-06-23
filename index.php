<html>
<head>
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="login">
	<img src="avatar.png">
	<center>
	<h2 class="loginh">login</h2>
	</center>
	<div class="details">
		<center>
		<form id="frm">
		<label for="username">Username
		</label>
		<input type="text" name="username" placeholder="Enter Username" id="username">
		<label for="pass">Password
		</label>
		<input type="password" name="password" placeholder="Enter Password" id="password">
		<a href="#" ><button id="save">Submit</submit></a>
		</form>
		</center>
		<p id="er"></p>
	<div id="new">
	<a href="#"><p>forget password<p><a>
	<a href="index2.html"><p>Create new account<p><a>
	</div></div>

</div>

<script src="jquery.js"></script>
<script>
	$("#save").click(function(){
		
				
		var na=$("#username").val();
		var pa=$("#password").val();
			$.post("db.php",
			{
			username:na,
			password:pa
			
			},
			function(data){
			alert(data);
			});
	
	
	
	});


</script>
</body>
</html>