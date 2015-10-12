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
	$sql = get_posts($_GET['id']);
	while(($data = $database->fetchAssoc()) != null){
		echo '
		<div>
			<h1><b>@'.$data['user'].'</b><span class="rating pull-right">';
				 for($j=0; $j<$data['rating']; $j++)
					echo '<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>';
				echo '</span></h1><br>
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
		<tr><td><b>Price:</b></td><td> <code>'.$data['price'].'</code></td></tr>
		<br>
		<tr><td><b>Description:</b></td><td> <code>'.$data['description'].'</code></td></tr>
		<br>
		<tr><td><b>Quantity:</b></td><td> <input type="text" style="width:50px" value="1"/></td></tr>
		<br>
		<br>
		<tr><td colspan="2"><a href="add_order.php?id='.$data['id'].'"><br><button type="button" class="btn btn-sm btn-danger">Order this food</button></a></td></tr>
		<tr><td><br><br><br></td></tr>
		<tr><td><h3>Comments</h3><hr></td></tr>
		<tr><td style="color:brown">@Vaibhav</td><td>This was one of the best dishes I ever had. The delivery was fast and was delivered within half an hour. Definitely more satisfying than eating food in restaurants. </td></tr>
		<tr><td style="color:brown">@Ravi</td><td>It was a bit spicy but I liked the taste.</td></tr>
		<tr><td colspan="2"><br><textarea style="width:100%; height: 100px; color: #c2c2c2;padding: 10px;">Add your comments here ...</textarea></td></tr>
		<br><br></div>
		';
	}
	?>	

</body>
</html>
