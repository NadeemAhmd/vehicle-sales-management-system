<?php
include_once 'login/dbconnect.php';
$res=mysql_query("SELECT * FROM vehicle");
?>
<!DOCTYPE html>
<html>

<head>
<title>About</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css"/>
<script rel="stylesheet" src="js/main.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
	</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
	 <!-- <li><a href="show_tables.php">Show Database<span class="sr-only">(current)</span></a></li>
	  <li><a href="#">About us</a></li>
		<li><a href="#">Contacts</a></li>-->
     
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Client Login</a></li>
        <li><a href="login/index.php"><span class="glyphicon glyphicon-log-in"></span>Dashboard Login</a></li>
      </ul>
        </div>
      </form>
    
    </div><!-- /.navbar-collapse -->
</nav>
</header>
<!--


<div class="slider">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/7.jpg" alt="Car">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/8.jpg" alt="Car">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/9.jpg" alt="Car">
      <div class="carousel-caption">
        ...
      </div>
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





<div class="well" style=" margin-top:10px; margin-left:40px; margin-right:40px; margin-bottom:40px;">
<div class="container-fluid">
<div class="page-header text-center">
<h1 class="text-uppercase"> Feel the Speed!!<h1>
<h3> <i>Latest Models</i></h3>
</div>

-->
<!--
<?php
		while ($Row = mysql_fetch_assoc($res)) { ?>
<div class="col-md-3">
  <div class="thumbnail">
				
<a href="view.php"><img src="login/uploads/<?php $path=explode("*",$Row['image']); echo $path[0]; ?>" class="img-responsive img-circle" ></a>
  <div class=" caption">
  <h4><?php echo $Row['model_name']; ?> <h4>
  <div class="price1" style="height: 20px;">
  <span class="actual"><h5><i><strong>Starting MRP RS.<?php echo $Row['s_price']; ?></strong></i></h5></span>
</div>
</div>
<a href="view.php" class="btn btn-info"> View details</a>

</div>
</div>
<?php } ?>


</div>
</div>
</div>


<!<div class="container-fluid">
<div style="background-color:black;border-radius: 10px;">
<div class="container">
		<!--div class="section group">
				<div class="col-md-3">
					<h3>INFORMATION</h3>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Legal Notice</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>OUR OFFERS</h3>
					<ul>
						<li><a href="view.php">New products</a></li>
						<li><a href="view.php">top sellers</a></li>
						<li><a href="view.php">Specials</a></li>
						<li><a href="view.php">Products</a></li>
						<li><a href="view.php">Comments</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="#">Your Account</a></li>
						<li><a href="#">Personal info</a></li>
						<li><a href="#">Prices</a></li>
						<li><a href="#">Address</a></li>
						<li><a href="#">Locations</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="https://www.facebook.com/"><img src="images/facebook.png" title="facebook">facebook</a></li>
						<li><a href="https://twitter.com/"><img src="images/twitter.png" title="Twiiter">Twiiter</a></li>
						<li><a href="https://www.rss.com/"><img src="images/rss.png" title="Rss">Rss</a></li>
						<li><a href="https://plus.google.com/"><img src="images/gpluse.png" title="Google+">Google+</a></li>
					</ul>
				</div>
				<div class="clear"></div> <br>
		</div>
	</div>
   </div!-->
   <h2> Vehicle Sales Management System</h2>
   <p>
   <b>Vehicle Management System</b> is software which is helpful for customer, who wants to know the warranty period of a vehicle. Vehicle Management System is a content management system written for any operating systems which focused in the area of adding, editing and deleting the manufacturer details, model, and price. In this software an employee can register as a user and he can manage the customer details, vehicle details.
In this system, an admin can add a new vehicle details to the database. Whenever the admin wants to modify these details he can update new values through this software. The main advantage is that this module is helpful for the customers to get details of the vehicles such as warranty period.
Vehicle Management System is developed and customized for employee and customer. Its modules support most type of vehicles.</p>
<p>Vehicle Management System uses PHP as the front end and MYSQL as the back end.</p>
 
<p>&copy Project by Nadeem. All right reserved.</p>
</div>
</body>
</html>