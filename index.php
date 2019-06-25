<!doctype html>
<html>
	<head>
		<title>Rayyan Q</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<header>
			<img src="img/r.png" id="logo">
			<span id="navigation">
				<a href="index.html">Home</a>
				<a href="blog.html">Blog</a>
				<a href="work.html">Work</a>
				<a href="contact.html">Contact</a>
			</span>
		</header>
		<div id="body">
			<?php
				$con = mysqli_connect('rayyanaqcom.domaincommysql.com', 'rayyanq_2000', 'rayyanq','rayyanq2000');
				$getposts = mysqli_query($con, "SELECT * FROM posts WHERE deleted='no' ORDER BY id DESC LIMIT 30");
				while($row = mysqli_fetch_assoc($getposts)){
					$id = $row['id'];
					$heading = $row['heading'];	
					$body = $row['body'];
					$image = $row['image'];
					$date = $row['date'];
					$deleted = $row['deleted'];

					echo'
					<div class="posts">
						<h2>'.$heading.'</h2>
						'.$date.'<br>
						<img src="'.$image.'" class="post_img">
						<p>'.$body.'</p>
					</div>
					';
				}
			?>
			<div class="posts">
				<h2>Hello</h2>
				<img src="" class="post_img">
				In any homework passes homes at the time of the first protein in diameter boat vehicles. The Ferret valley, sometimes in silence, a wedding with no wish to venenatis porttitor not, for filthy when he takes on. Is basketball graduated class skirt chat sit silent as to offset any chili vehicles.

But the author. Despite mass care jaws of life that is sad and sad makeup hymenaeos not running bananas chili recipes dark square foot bananas mauris consumer convenience class developers, said skirt by facilisi professionalism. Hunger push. A drink worth it.

Street allies element present in the mass sapien graduated takes great antioxidants initiated by members of law enforcement to CNN sad sad. Lorem any mass.
			</div>
		</div>
	</body>
</html>