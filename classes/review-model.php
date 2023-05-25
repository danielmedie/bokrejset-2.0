<?php

class ReviewModel
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Metoder för att hantera recensioner
    // ...

    // Exempelmetod
    public function getAllReviews()
    {
        // Implementation för att hämta alla recensioner från databasen
    }
}
