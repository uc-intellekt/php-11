<h1>My Blog</h1>

<?php foreach ($posts as $post) : ?>
	<h2>
		<a href="">
			<?= $post['heading'] ?>
		</a>
	</h2>
	<p><?= $post['intro'] ?></p>
	<div>
		<a href="">read more...</a>
	</div>
<?php endforeach ?>
