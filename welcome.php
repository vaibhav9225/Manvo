<?php include_once('header.php'); ?>

<!-- trying body -->

<!-- trying -->
<div class="container theme-showcase" role="main">
  <br />
  <br>
  <div class="page-header">
    <h1 style="font-weight: 200">New Customer Requests</h1>
  </div>
  
  <!-- end -->
  <div class="row">
        <div class="col-md-8">
		
		
		<?php
			$arr= array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg");
			$i = 0;
			$sql = get_requests();
			while(($data = $database->fetchAssoc()) != null){
				echo '
				<span class="title" style="float:left;width:30%;height:50%;padding:5px; margin-bottom: 20px; margin-right: 10px;font-weight: 200;">
				<span style="color:#337ab7"><b>@'.$data['user'].'<b></span>
				<br><span style="width:100%"><img src="img/'.$arr[$i].'" alt="Smiley face" height="180px" width="220px"></span><br><br><code>'
				.$data['name'].'</code> <span style="float:right;font-weight: 200;">&nbsp;<i class="fa fa-inr"></i>'.$data['proposedPrice'].'</span><br><code>'.$data['cuisine'].' / '.$data['category'].' / '.$data['spiceLevel'].'</code>&nbsp;';
		for($k=0; $k<$data['spiceLevel']; $k++){
			echo '<img src="./img/chilli.png" style="width:10px; height: 10px;"/>';
		}
		echo'
				<br><a href="requests.php?id='.$data['id'].'&p_id='.$arr[$i].'">View Request</a>
				<br><br>
				</span>
				';
				$i++;
			}
			?>

        </div>
        <div class="col-md-4">

		<h4>Your Accepted Requests</h4>
				<?php
			$arr= array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg");
			$i = 0;
			$sql = get_accepted_requests();
			while(($data = $database->fetchAssoc()) != null){
				echo '
				<span class="title" style="float:left;padding:5px; margin-bottom: 20px;">
				<span style="color:#337ab7"><b>@'.$data['user'].'<b></span>
				<br><span style="width:100%;font-weight:200"><img src="img/'.$arr[$i].'" alt="Smiley face" height="40px" width="60px"></span>&nbsp;'
				.$data['name'].' &nbsp;<span > <i class="fa fa-inr"></i>'.$data['proposedPrice'].'</span>
				<br>
				<br>
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