<?php

$posts = $conn->fetchAll("SELECT * FROM posts");

?>

<h1>Posts</h1>

<table>
	<tr>
		<th>ID</th>
		<th>Heading</th>
		<th>Intro</th>
		<th>Actions</th>
	</tr>
	<?php foreach ($posts as $post) : ?>
		<tr>
			<td><?= $post['id'] ?></td>
			<td><?= $post['heading'] ?></td>
			<td><?= $post['intro'] ?></td>
			<td>
				<a href="<?= $request->server->get('SCRIPT_NAME') ?>?id=<?= $post['id'] ?>">show</a>
				<a href="<?= $request->server->get('SCRIPT_NAME') ?>/admin/post?id=<?= $post['id'] ?>">edit</a>
				<a href="<?= $request->server->get('SCRIPT_NAME') ?>/admin/post/delete?id=<?= $post['id'] ?>">delete</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
