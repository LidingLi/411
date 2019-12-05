<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
?>
<html >
	<head>
		<title>Chai Tea</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main2.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>


	<body id="top" >

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="../assets/images/avatar.jpg" alt="" /></a>
					<h1><strong>Hi <?php Print "$user"?>!</br></br></h1>
					<h2><a href="../select.php" style="text-decoration:none;">Search</strong></a></h2>
					<h2><a href="../edit.php" style="text-decoration:none;">Setting</strong></a></h2>
					<h2><a href="../rate.php" style="text-decoration:none;">Rate</strong></a></h2>
					<h2><a href="../recommendations.php" style="text-decoration:none;">Recommend</strong></a></h2>
					<br><br><br>

 				 	<h5><a href="../index.php">Log out</strong></a></h5>
 				</div>
			</header>
		<!-- Main -->
			<div id="main">

					<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Chai Tea<br />
							 </h2>
						</header>

									<div class="12u$"><span class="image fit"><img src="../assets/images/thumbs/7.png" alt="" /></span></div>
								
						</section>


	<section>
	<div class="table-wrapper">
		<table class="alt">
			<thead>
				<tr>
					<th>Store</th>
					<th>Price</th>
				</tr>
			</thead>
		<tbody>
			<?php
				
					$link = mysqli_connect("localhost", "root", "", "first_db");
					$result = mysqli_query($link, "select distinct storeName, location, price from sells natural join stores where drinkID = 1"); 
					while($row = mysqli_fetch_array($result)){
						Print "<tr>";
						Print '<td align="center">'. $row['storeName']."</td>";
						Print '<td align="center">'. $row['location']."</td>";
						Print '<td align="center">'. $row['price']."</td>";
						Print "</tr>";
					}
				
			?>
									</tbody>
									
								</table>
							

			</section>


	<section>
						<h2>Recipe</h2>

						
							<h4>Step 1</h4>
							<p>Bring all ingredients except tea bags together to a boil in a saucepan over medium-high heat.</p>
							<h4>Step 2</h4>
							<p>Reduce heat to medium-low, cover, and simmer for 15 minutes. </p>
							<h4>Step 3</h4>
							<p>Add tea bags and let steep for 5 minutes. </p>
							<h4>Step 4</h4>
							<p>Pour mixture through a strainer and reserve the liquid for concentrate, and let cool to room temperature.</p>
							<h4>Step 5</h4>
							<p>Mix equal parts concentrate with water or milk to make chai tea. Or refrigerate in an airtight container for up to one week.
</p>
	</section>


    <hr style="margin-top: 100px;">
    </div>
			</div>

		
 
	</body>
</html>