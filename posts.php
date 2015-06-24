<?php

$posts = $conn->fetchAll("SELECT * FROM posts");

?>

<h1>My Blog</h1>

<?php foreach ($posts as $post) : ?>
	<h2>
		<a href="<?= path('?id=' . $post['id']) ?>">
			<?= $post['heading'] ?>
		</a>
	</h2>
	<p><?= $post['intro'] ?></p>
	<div>
		<a href="<?= path('?id=' . $post['id']) ?>">read more...</a>
	</div>
<?php endforeach ?>
