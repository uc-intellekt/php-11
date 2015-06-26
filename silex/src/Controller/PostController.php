<?php

namespace Controller;

use Silex\Application;
use Doctrine\DBAL\Connection;

class PostController
{
    public function indexAction(Application $app)
    {
        /** @var Connection $conn */
        $conn = $app['db'];
        $posts = $conn->fetchAll("SELECT * FROM posts");

        return include __DIR__ . '/../views/posts.php';
    }

    public function showAction($slug)
    {
        return 'Post ' . $slug;
    }
}
