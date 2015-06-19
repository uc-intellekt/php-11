<?php

$post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id", array(
	'id' => (int) $_GET['id'],
));

?>

<a href="<?= $_SERVER['PHP_SELF'] ?>">
	Back to blog
</a>

<h1><?= $post['heading'] ?></h1>
<p><?= $post['content'] ?></p>
