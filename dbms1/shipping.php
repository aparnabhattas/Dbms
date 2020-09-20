<!DOCTYPE html>
<html>
<head>
	<title>View Orders Shipping</title>
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
<h1 style="text-align:center;padding:10px;" class="heading">Shipping Details</h1>
<div class="contaier tab">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">BILL NUMBER</th>
      <th scope="col">NAME</th>
      <th scope="col">PHONE</th>
      <th scope="col">DOOR</th>
	  <th scope="col">STREET</th>
	  <th scope="col">LOCALITY</th>
	  <th scope="col">CITY</th>
	  <th scope="col">STATE</th>  
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
	
	$sql="SELECT * from bill";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			//echo "<br>".$row["ins_id"].$row["ins_name"].$row["ins_brand"].$row["ins_cat"].$row["price"].$row["descp"]."<br>";
			echo "<tr>";
			echo "<th scope=\"row\">".$row["Bill_number"]."</th>";
			echo "<td>".$row["Name"]."</td>";
			echo "<td>".$row["Phone"]."</td>";
			echo "<td>".$row["Door"]."</td>";
			echo "<td>".$row["Street"]."</td>";
			echo "<td>".$row["Locality"]."</td>";
			echo "<td>".$row["City"]."</td>";
			echo "<td>".$row["State"]."</td>";
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