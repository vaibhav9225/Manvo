<?php include_once('header.php'); ?>

<!-- trying body -->
<!-- modal -->

<!-- trying -->
<div class="container theme-showcase" role="main">
  <br />
  <br>
  <div class="page-header">
    <h1 style="font-weight: 200">Chefs serving near you
	<span class="pull-right"><a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">+ Request Meal</a>
</span>
	</h1>
	  <!-- Button HTML (to Trigger Modal) -->

	  <!-- Modal HTML -->
	  <div id="myModal" class="modal fade">
		  <div class="modal-dialog modal-lg">
			  <div class="modal-content">
				  <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">Create a Meal</h4>
				  </div>
				  <div class="modal-body">
					  <p>Please enter the details for the meal</p>
					  <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
				  </div>
				  <div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save changes</button>
				  </div>
			  </div>
		  </div>
	  </div>
	  <!-- end modal -->
  </div>
  <!-- end -->

  <div class="row">
        <div class="col-md-8">
		
		
		<?php
			$arr= array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg", "1.jpg","2.jpg","3.jpg","4.jpg","5.jpg");
			$i = 0;
			$sql = get_posts();
			while(($data = $database->fetchAssoc()) != null){
				if($data['spiceLevel']==2)
					$spicy = "/spicy";
				else if ($data['spiceLevel']==1)
					$spicy = "/medium-spicy";
				echo '
				<span class="title" style="float:left;width:30%;height:50%;padding:5px; margin-bottom: 20px; margin-right: 10px;font-weight: 200;">
				 <span class="rating pull-right">';
				 for($j=0; $j<$data['rating']; $j++)
					echo '<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>';
				echo '</span>
				<span style="color:#337ab7"><b>@'.$data['user'].'<b></span>
				<br><span style="width:100%"><img src="img/'.$arr[$i].'" alt="Smiley face" height="180px" width="220px"></span><br><br><code>'
				.$data['name'].'</code><span style="float:right;">&nbsp;<i class="fa fa-inr"></i>'.$data['price'].'</span><br><code>'.$data['cuisine'].'/'.$data['category'].'</code>&nbsp;';
		for($k=0; $k<$data['spiceLevel']; $k++){
			echo '<img src="./img/chilli.png" style="width:10px; height: 10px;"/>';
		}
		echo'
				<br><a href="menu.php?id='.$data['id'].'&p_id='.$arr[$i].'">View Post</a>
				<br><br>
				</span>
				';
				$i++;
			}
			?>

        </div>
        <div class="col-md-4">

		<h4>Your Orders</h4>
				<?php
			$arr= array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg");
			$i = 0;
			$sql = get_ordered_posts();
			while(($data = $database->fetchAssoc()) != null){
				echo '
				<span class="title" style="float:left;padding:5px; margin-bottom: 20px;">
				<span style="color:#337ab7"><b>@'.$data['user'].'<b></span>
				<br><span style="width:100%;font-weight:200"><img src="img/'.$arr[$i].'" alt="Smiley face" height="40px" width="60px"></span>&nbsp;'
				.$data['name'].' &nbsp;<span > <i class="fa fa-inr"></i>'.$data['price'].'</span>
				<br>
				<br>
				<a href="#">
				<button type="button" class="btn btn-sm btn-danger">Cancel Order</button></a>
				<br><br>
				</span>
				';
				$i++;
			}
			?>

       </div>
  </div>
<!-- end -->
<!-- end trying body -->

</div>

<!--
<div style="width:20%;height:70%;float:right;background-color:green">
 </div>
 -->

</body>
</html>