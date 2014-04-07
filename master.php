<!DOCTYPE html>
<html>
<head>
  <title>Scott Gulliver</title>
   <link href="/assets/css/site.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
  		<h1>Scott Gulliver</h1>
  		<h2>Software Developer</h2>
  	</header>
  	<div class="nav">
  		<ul>
  			<li id="linkAbout" <?php if (CURRENTPAGE == "Index") { echo 'class="current"'; } ?>>
  				<a class="headerlinks" href="/">about</a>
  			</li>
  			<li id="linkProjects" <?php if (CURRENTPAGE == "Projects") { echo 'class="current"'; } ?>>
  				<a class="headerlinks" href="/projects">projects</a>
  			</li>
  			<li id="linkBlog" <?php if (CURRENTPAGE == "Blog") { echo 'class="current"'; } ?>>
  				<a class="headerlinks" href="/blog">blog</a>
  			</li>
  			<li id="linkCode" <?php if (CURRENTPAGE == "Code") { echo 'class="current"'; } ?>>
  				<a class="headerlinks" href="/code">code</a>
  			</li>
  		</ul>
  	</div>
  	<div class="container">
  		<div class="main-content">
				<?php include($page_content);?>
			</div>
		</div>
	</div>
	<footer><p>&copy; Copyright 2014, Scott Gulliver.</p></footer>
</body>
</html>
