<?php include_once('header.php'); ?>
<head>
<style>
#mydiv {
    width:50em;
    height:auto;
    margin: 0 auto;
	margin-top: 100px;
	margin-bottom: 100px;
	padding: 20px;
    border: 1px solid #ccc;
   border-radius: 5px;
box-shadow:2px 2px 10px #555;
}
table{
	position: relative;
	top: -150px;
}
table td{
	padding: 5px;
}
</style>
</head>
<body>

<div id="mydiv">
 
	  <?php
	include_once('./includes/init.php');
	$sql = get_requests($_GET['id']);
	while(($data = $database->fetchAssoc()) != null){
		echo '
		<div>
			<h1><b>@'.$data['user'].'</b></h1><br>
			<div width="100%" style="height: 300px;background-image:url(./img/'.$_GET['p_id'].');background-repeat:no-repeat; background-size:cover ;"></div>
		</div>
		<table>
		<tr><td><b>Dish:</b></td><td> <code>'.$data['name'].'</code></td></tr>
		<br>
		<tr><td><b>Cuisine:</b></td><td> <code>'.$data['cuisine'].'</code></td></tr>
		<br>
		<tr><td><b>Category:</b></td><td> <code>'.$data['category'].'</code></td></tr>
		<br>
		<tr><td><b>Spice Level:</b></td><td>';
		for($k=0; $k<$data['spiceLevel']; $k++){
			echo '<img src="./img/chilli.png" style="width:10px; height: 10px;"/>';
		}
		echo'</td></tr>
		<br>
		<tr><td><b>Proposed Price:</b></td><td> <code>'.$data['proposedPrice'].'</code></td></tr>
		<br>
		<tr><td><b>Description:</b></td><td> <code>'.$data['description'].'</code></td></tr>
		<br>
		<tr><td><b>Quantity:</b></td><td> <input type="text" style="width:50px" value="1"/></td></tr>
		<br>
		<br>
		<tr><td colspan="2"><a href="accept_order.php?id='.$data['id'].'"><br><button type="button" class="btn btn-sm btn-danger">Accept this request</button></a></td></tr>
		<br><br></div>
		';
	}
	?>	

</div>

</body>
</html>
