
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- <style type="text/css"> -->
	<link href = "css/styles.css" rel = "stylesheet">
	
	
		
		
		
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
	
	
	
	<div class = "navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class ="navbar-header">
				<button type = "button" class="navbar-toggle"   data-toggle="collapse" data-target=".navbar-collapse"> 
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="Marketplace.php">Book MarketPlace</a>
				
				
			
			</div>
			<div class="navbar-collapse collapse">
				<ul class ="nav navbar-nav navbar-right">
					<li class = "active"><a href="Marketplace.php">Home</a></li>
					<li><a href="Buyers.php">Buyer</a></li>
					<li><a href="Sellers.php">Seller</a></li>
					
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Theme Layout<b class="caret"></b></a>
						
					<ul class = "dropdown-menu">
						<li class="dropdown-header">Admin & Dashboard</li>
						<li><a href = "#">Standard</a></li>
						<li><a href = "#">Night Mode</a></li>
					</ul>
					
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class = "container">
		
		<div class ="jumbotron">
		
			<center><h2> TJHSST Book Marketplace: </h2>
			<p> </p>
			<p> </p>
			<p> </p>
			<p> </p>
			<p> Buy all the best SAT, SAT Subject, and AP Books around for the cheapest prices from your trustworthy TJHSST peers</p>
			
			
			<a class = "btn btn-success" href="Buyers.php">Buyers</a>
			
			<a class = "btn btn-success" href="Sellers.php">Sellers</a> </center>
			
		</div>
	</div> 
	
	
	
	<div class = "container">
	
		<div class = "row">
			
			
			<div class = "col-md-5">
				
				<h1>All Deals</h1>
				
			</div>
			
			<div class = "col-md-3">
			
				
				
			</div>
			
			
			
		</div>
		
	</div>
	
	
<!-- 	<div class = "container">
		<div class = "row">
			<div class = "col-md-3">
			
			<h3><a href = "#">Link 1</a></h3>
			<p>penis</p>
			
			</div>
		</div>
	</div> -->
	

	
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
  </body>
</html>
<?php
	$x = 1;
	$link = mysqli_connect("sql5.freemysqlhosting.net:3306", "sql5102361", "bVhA3xfwqw", "sql5102361");
        $query="SELECT * FROM `sql5102361`.`entries`";
        $result = mysqli_query($link, $query);
        if (1 > 0) {
    		foreach($result as $row) {
    			$seller = $row["seller"];
    			$title = $row["title"];
    			$publisher=$row["publisher"];
    			$condition=$row["condition"];
    			$price=$row["price"];
    			$item=strval($x);
    		#	echo "<left>".$item.".  Seller: ".$seller. "</left> \n";
        	#	echo "<left> Title: " .$title. " </left> \n";
        	#	echo "<left> Publisher: " .$publisher. " </left> \n";
        	#	echo "<left> Condition: " .$condition. " </left> \n";
        	#	echo "<left> Price: " .$price. " </left> \n\n\n \n";
        		echo $item.". Seller: ".$seller."</p>
				<p>Title: ".$title."</p>
				<p>Publisher: ".$publisher."</p>
				<p>Condition: ".$condition."</p>
				<p>Price: ".$price."</p> \n\n\n";
        		$x+=1;
			}
        }
?>