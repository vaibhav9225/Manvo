<!DOCTYPE html>
<html lang="en">
<?php
include_once('./includes/init.php');
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Manvo</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
      <form action="logger.php" method="post" class="navbar-form navbar-left pull-right" role="search">
        <div class="form-group">
          <input name="user_id" type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <input name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Login</button>

        <button type="button" class="btn btn-primary">Sign Up</button>
      <span>
        <?php
          if(isset($_GET['invalid'])){
            echo '<p style="color:white">Not a valid ID</p>';
          }
        ?>
      </span>
      </form>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!-- trying -->
<div class="container theme-showcase" role="main">
  <br />
  <br>
  <div class="page-header">
    <h1>Welcome Guest!</h1>
  </div>
  <p>
  <div class="buttonHolder" style="text-align:center">
    <button type="button" class="btn btn-lg btn-success" >Current Location: <u>Buffalo, NY</u> </button>
    </div>
  </p>
  <!-- end -->
  <!-- corousal try -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
      <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide [1140x500]" src="./img/Mainpage/southbf.jpg" data-holder-rendered="true" style="background-size:cover">
      </div>
      <div class="item active">
        <img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide [1140x500]" src="./img/Mainpage/thaifood.jpg" data-holder-rendered="true">
      </div>
      <div class="item">
        <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide [1140x500]" src="./img/Mainpage/somthali.jpg" data-holder-rendered="true">
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- end -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>


