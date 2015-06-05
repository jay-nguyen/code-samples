<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Demo</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

<h1>The Posts</h1>
	<?php foreach ($posts as $post) : ?>
		<article>
			<div class="page-header"><h2><?= $post['title']; ?></h2></div>
			<div class="col-md-8"><?= $post['body']?></div>
		</article>
	<?php endforeach; ?>

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>