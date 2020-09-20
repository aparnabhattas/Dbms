<!DOCTYPE html>
<html>
<head>
<title>Sales</title>
	<link rel="stylesheet" type="text/css" href="Mainpage.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="shortcut icon" src="">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
		
		<div>
       		 <a class="nav-link" href="admin.php" style="color:black;"><i class="fas fa-angle-double-left" style="color:black;"></i>Back</a>
     		
  		</div>
  	</nav>
<h1 style="text-align:center;padding:10px;" class="heading">Sales</h1>
<div class="contaier tab">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">BILL NUMBER</th>
      <th scope="col">NAME</th>
      <th scope="col">PRODUCT ID</th>
      <th scope="col">PRICE</th>
    </tr>
  </thead>
  <tbody>
	<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "final_musicins";

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "connected";
//$response = array("msg"=>"invalid request","code"=>"INV_RQT");
	
	$sql="SELECT Bill_number,Name,ins_id,Price from bill";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			//echo "<br>".$row["ins_id"].$row["ins_name"].$row["ins_brand"].$row["ins_cat"].$row["price"].$row["descp"]."<br>";
			echo "<tr>";
			echo "<th scope=\"row\">".$row["Bill_number"]."</th>";
			echo "<td>".$row["Name"]."</td>";
			echo "<td>".$row["ins_id"]."</td>";
			echo "<td>".$row["Price"]."</td>";
			echo "</tr>";
		}
	}
	else{
		echo "0 result";
	}


//echo json_encode($response);
?>
  </tbody>
</table>
</div>
</body>
<style>
body{
	background-color:#51DBBC;
}
.tab{
	padding:50px;
}
table:hover{
   box-shadow: 4px 3px 22px -2px rgba(0,0,0,0.75);
}
tr:hover{
	box-shadow: 2px 0px 24px -4px rgba(250,242,250,1);;
}
.heading:hover{
	background-color:black;
	color:white;
}

</style>
</html>