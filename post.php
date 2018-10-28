<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['userId'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: login.html");
}
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
		<h1>Create your travel blog here</h1>
		<section>
			<form id="form" action="post/create.php" method="POST">
				<div class="form-group">
					<lable for="titleofpost">Title:</lable>
					<input type="text" id="titleofpost" name="postTitle" placeholder="Title goes here...">
				</div>
				<div class="form-group">
					<lable for="releasedate">Release Date:</lable>
					<input type="date" id="releasedate" name="releaseDate">
				</div>
				<div class="form-group">
					<lable for="featureimg">Feature Image</lable>
					<input type="file" id="featureimg" name="featureImgUpload">
				</div>
				<div class="form-group">
					<lable for="featureimgonline">Online Image</lable>
					<input type="text" id="featureimgonline" name="featureImgOnline"placeholder="Image url goes here...">
				</div>
				<div class="form-group">
					<lable for="postcontent">Content</lable>
					<textarea id="postcontent" name="postContent"></textarea>
				</div>
				<button type="submit" class="btn-success">Post</button>
			</form>
		</section>
	</main>
	<footer>
		<p id="copyright"> &copy; CS 215 - All rights reserved!</p> 
	</footer>
</body>
</html>