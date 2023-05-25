
<?php

class BookView
{
    public function renderAllBooksAsList($books)
    {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>";
            echo "Title: " . $book['title'] . "<br>";
            echo "Author: " . (isset($book['author']) ? $book['author'] : 'N/A') . "<br>";
            echo "Genre: " . (isset($book['genre']) ? $book['genre'] : 'N/A') . "<br>";
            echo "</li>";
        }
        echo "</ul>";
    }

    public function renderAddBookForm()
    {
        // Rendera formuläret för att lägga till böcker
    }
}
