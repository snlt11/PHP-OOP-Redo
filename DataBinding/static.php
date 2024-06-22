<?php

class Library
{
    private static $totalBooks = 0;

    public static function addBook()
    {
        self::$totalBooks++;
    }

    public static function getTotalBooks()
    {
        return self::$totalBooks;
    }
}

Library::addBook();
Library::addBook();

echo "Total books in the library: " . Library::getTotalBooks(); 
// Outputs: Total books in the library: 2
