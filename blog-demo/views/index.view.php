<h1>The Posts by <?= $name; ?></h1>
	<?php foreach ($posts as $post) : ?>
		<article>
			<div class="page-header">
				<h2>
					<a href="single.php?id=<?= $post['id']; ?>"><?= $post['title']; ?></a>
				</h2>
			</div>
			<div class="col-md-8"><?= $post['body']?></div>
		</article>
	<?php endforeach; ?>