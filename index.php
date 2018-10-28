<!-- PHP code -->
<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbName = "test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbName);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM tb_posting";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		 // output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo "<br> id: ". $row["postId"]. " - Name: ". $row["postTitle"]. " " . $row["postUrl"] . "<br>";
    	}
	} else {
    	// echo "0 results";
	}

	$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Travel blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="wrap">
			<p id="brandname"><i class="fa fa-plane-departure"></i> <a href="./">TravelBlog</a></p>
			<nav>
				<ul>
					<li><a href="post.php">New Post</a></li>
					<li><a href="login.html">Login</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
		<h1>Best places to discover</h1>
		<section>
			<div class="blog">
				<div class="blog-feature-img">
					<a href="details.html"><img src="https://images.pexels.com/photos/59519/pexels-photo-59519.jpeg?cs=srgb&dl=aerial-aerial-view-aeroplane-59519.jpg&fm=jpg" alt="" class="col-s-12"></a>
				</div>
				<div class="blog-summary">
					<h2><a href="">Title of the post</a></h2>
					<p class="blog-date"><i class="fa fa-calendar"></i> July 29, 2018</p>
					<hr>
					<summary>Conveniently target process-centric "outside the box" thinking after B2C process improvements. Proactively brand premier niches through 24/365 products. Authoritatively whiteboard highly efficient communities and resource-leveling initiatives.</summary>
					<a href="#" class="read-more btn">Read More</a>
				</div>
			</div>
			<hr>
		</section>
		<section>
			<div  class="blog">
				<div class="blog-feature-img">
					<a href="#"><img src="https://images.pexels.com/photos/458555/pexels-photo-458555.jpeg?cs=srgb&dl=back-view-clouds-cloudy-458555.jpg&fm=jpg" alt=""></a>
				</div>
				<div class="blog-summary">
					<h2><a href="">Title of the post</a></h2>
					<p class="blog-date"><i class="fa fa-calendar"></i> July 29, 2018</p>
					<hr>
					<summary>Conveniently target process-centric "outside the box" thinking after B2C process improvements. Proactively brand premier niches through 24/365 products. Authoritatively whiteboard highly efficient communities and resource-leveling initiatives.</summary>
					<a href="#" class="read-more btn">Read More</a>
				</div>
			</div>
			<hr>
		</section>
		<section>
			<div  class="blog">
				<div class="blog-feature-img">
					<a href="#"><img src="https://images.pexels.com/photos/915972/pexels-photo-915972.jpeg?cs=srgb&dl=adult-adventure-backlit-915972.jpg&fm=jpg" alt=""></a>
				</div>
				<div class="blog-summary">
					<h2><a href="">Title of the post</a></h2>
					<p class="blog-date"><i class="fa fa-calendar"></i> July 29, 2018</p>
					<hr>
					<summary>Conveniently target process-centric "outside the box" thinking after B2C process improvements. Proactively brand premier niches through 24/365 products. Authoritatively whiteboard highly efficient communities and resource-leveling initiatives.</summary>
					<a href="#" class="read-more btn">Read More</a>
				</div>
			</div>
			<hr>
		</section>
		<section>
			<div class="blog">
				<div class="blog-feature-img">
					<a href="#"><img src="https://images.pexels.com/photos/386025/pexels-photo-386025.jpeg?cs=srgb&dl=adventure-beach-blue-386025.jpg&fm=jpg" alt=""></a>
				</div>
				<div class="blog-summary">
					<h2><a href="">Title of the post</a></h2>
					<p class="blog-date"><i class="fa fa-calendar"></i> July 29, 2018</p>
					<hr>
					<summary>Conveniently target process-centric "outside the box" thinking after B2C process improvements. Proactively brand premier niches through 24/365 products. Authoritatively whiteboard highly efficient communities and resource-leveling initiatives.</summary>
					<a href="#" class="read-more btn">Read More</a>
				</div>
			</div>
			<hr>
		</section>
		
		<section>
			<div class="blog">
				<div class="blog-feature-img">
					<a href="#"><img src="https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?cs=srgb&dl=architecture-boats-buildings-417344.jpg&fm=jpg" alt=""></a>
				</div>
				<div class="blog-summary">
					<h2><a href="">Title of the post</a></h2>
					<p class="blog-date"><i class="fa fa-calendar"></i> July 29, 2018</p>
					<hr>
					<summary>Conveniently target process-centric "outside the box" thinking after B2C process improvements. Proactively brand premier niches through 24/365 products. Authoritatively whiteboard highly efficient communities and resource-leveling initiatives.</summary>
					<a href="#" class="read-more btn">Read More</a>
				</div>
			</div>
			<hr>
		</section>
	</main>
	<footer>
		<p id="copyright"> &copy; CS 215 - All rights reserved!</p> 
	</footer>
</body>
</html>