<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="simple template for a shop with blog post as option">
    <meta name="author" content="Swapnil Sharma">

    <title>Simple website-Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

   <!--header for the website -->
        <?php require_once("header.php")?>

    <!-- Navigation -->
    <?php require_once("topNav.php")?>
    
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a> </h2>
				
                    <hr>
                    <h2 class="intro-text text-center">Company Name
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>OCTOMBER 13, 2017</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE 
                        <br>
                        <small>OCTOMBER 5, 2017</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE 
                        <br>
                        <small>DECEMBER 18, 2016</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Irish Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frozen Caramel Latte</h4>
		  </div>
		  <div class="modal-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
    <!-- /.container -->

    <?php require_once("footer.php")?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>


<?php

} else {
    header("location:login.php ");
}
?>