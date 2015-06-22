<?php

$posts = $conn->fetchAll("SELECT * FROM posts");

?>

<h1>My Blog</h1>

<?php foreach ($posts as $post) : ?>
	<h2>
		<a href="<?= $request->server->get('SCRIPT_NAME') ?>?id=<?= $post['id'] ?>">
			<?= $post['heading'] ?>
		</a>
	</h2>
	<p><?= $post['intro'] ?></p>
	<div>
		<a href="<?= $request->server->get('SCRIPT_NAME') ?>?id=<?= $post['id'] ?>">read more...</a>
	</div>
<?php endforeach ?>
