<?php

use app\Authors\Author;
use app\Posts\Post;

//Need to use composer autoload.php file.
require_once("vendor/autoload.php");

class Test
{
    public function __construct()
    {
        $firstName = "John";
        $lastName = "Doe";
        $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod";

        $postAuthor = new Author($firstName, $lastName);
        $post = new Post($postAuthor, $content);

        $this->getResult($post);
    }
    public function getResult(Post $post)
    {
        $authorResult = $post->getAuthor();
        var_dump($authorResult);
        echo "<br>" . "<br>";
        echo $authorResult->getFirstName() . " " . $authorResult->getLastName() . " is writing " . $post->getContent();
    }
}
new Test();
