<?php

$post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id", array(
	'id' => $request->query->getInt('id'), // (int) $_GET['id'],
));

?>

<a href="<?= $request->server->get('SCRIPT_NAME') ?>/admin/post">
	Cancel
</a>

<form action="" method="POST">
	<div>
		Heading: <br>
		<input type="text" name="heading" value="<?= $post['heading'] ?>">
	</div>
	<div>
		Intro: <br>
		<textarea name="intro" id="" cols="30" rows="10"><?= $post['intro'] ?></textarea>
	</div>
	<div>
		Content: <br>
		<textarea name="content" id="" cols="30" rows="10"><?= $post['content'] ?></textarea>
	</div>
	<div>
		<input type="submit" value="Save">
	</div>
</form>
