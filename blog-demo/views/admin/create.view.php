<h1>Create a New Post</h1>
<form action="" method="post">
	<ul class="list-unstyled">
		<li>
		<div class="form-group">
		    <label for="title">Title:</label>
		    <input name="title" type="text"  class="form-control" id="title" placeholder="Enter email">
	  	</div>
		</li>
		<li>
			<div class="form-group">
				<label for="body">Body:</label>
				<textarea name="body" class="form-control" rows="9" id="body"></textarea>
			</div>
		</li>
		<li>
			<input class="btn btn-default" type="submit" value="Submit">
		</li>
	</ul>

	<?php if (isset($status)) :?>
		<p><?= $status; ?></p>
	<?php endif; ?>

</form>