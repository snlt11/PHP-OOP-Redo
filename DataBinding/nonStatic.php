<?php
class Book
{
    private $title;
    private $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    // Non-static method to get the book's title
    public function getTitle()
    {
        return $this->title;
    }

    // Non-static method to get the book's author
    public function getAuthor()
    {
        return $this->author;
    }
}

$book1 = new Book("1984", "George Orwell");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee");

echo "Book 1: " . $book1->getTitle() . " by " . $book1->getAuthor() . "\n"; 
// Outputs: Book 1: 1984 by George Orwell
echo "Book 2: " . $book2->getTitle() . " by " . $book2->getAuthor() . "\n"; 
// Outputs: Book 2: To Kill a Mockingbird by Harper Lee
