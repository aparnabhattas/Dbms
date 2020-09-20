<?php
if(isset($_COOKIE["uid"])){
	header("location: products.php");
}
if(isset($_COOKIE["aid"])){
	header("location: admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Mainpage.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   		 <span class="navbar-toggler-icon"></span>
 		 </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
     		 <li>
       		  <a class="nav-link" href="index.php">Home</a>
      		</li>
      		<li class="nav-item">
             <a class="nav-link" href="AboutUs.html">AboutUs</a>
      		</li>
        </ul>	
   	</div>
  </nav>
<div class="Thumbnail">
		<div class="jumbotron">
	 		 <h1 class="login1">Login</h1>
 		</div>
	</div>
<div class="ffalign">
	<form method="POST" id="LoginForm">
	  <div class="falign">
	    <label for="exampleInputEmail1">Username</label>
	    <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
	  </div>
	  <div class="falign">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  <div class="fbalign">
		<input type="hidden" name="login" value="true">
	  <button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</form>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#LoginForm").submit(function(){
		var formdata=$("#LoginForm").serialize();
		$.ajax({
			url:"verify.php",
			type:"POST",
			data:formdata,
			success:function(response){
				console.log(response);
				try{
					var resp=JSON.parse(response);
					if(resp.code=="LOGIN_SUC"){
						window.location=resp.loc;
					}
					else{
						alert(resp.msg);
					}
				}catch(err){
					alert(err);
				}
			},
			error:function(response){
				alert("please check your internet connection and try again");
			}
		});
		return false;
	});
});
</script>
</body>
</html>