<html>
<?php
include_once('./includes/init.php');
?>		
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
$(':radio').change(
  function(){
    $('.choice').text( this.value + ' stars' );
  } 
)
</script>

  <link rel="stylesheet" href="styles.css">
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Manvo</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
  <body role="document">
  
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/Hackathon/Hackathon/index.php"><b>Manvo</b></a>
			</div>
			
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/Hackathon/Hackathon/index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
		<?php
		if($_SESSION['role'] == 0) echo '<li><a href="welcome.php">Requests</a></li>';
		else echo '<li><a href="home.php">Orders</a></li>';
		?>
      </ul>
	  <ul action="logger.php" method="post" class="nav navbar-nav pull-right">
        <div class="navbar-header">
          <li class="navbar-brand">Welcome <a href="#"><?php echo $_SESSION['login_user']?></a> </li>
        </div>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>