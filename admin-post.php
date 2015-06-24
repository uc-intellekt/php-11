<?php

if ($request->isMethod('POST')) {
	if ($request->query->has('id')) {
		$conn->update('posts', $request->request->all(), [
			'id' => $request->query->getInt('id'),
		]);

		header('Location: ' . $request->server->get('SCRIPT_NAME') . '/admin/post?id=' . $request->query->get('id'));
		exit;
	} else {
		$conn->insert('posts', $request->request->all());

		header('Location: ' . $request->server->get('SCRIPT_NAME') . '/admin/post?id=' . $conn->lastInsertId());
		exit;
	}
}

$post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id", array(
	'id' => $request->query->getInt('id'), // (int) $_GET['id'],
));

?>

<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

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

<script>
	CKEDITOR.replace('intro');
	CKEDITOR.replace('content');
</script>
