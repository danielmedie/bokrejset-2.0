<?php

class ReviewView
{
    public function renderAllReviews($reviews)
    {
        echo "<h2>Alla recensioner</h2>";
        echo "<ul>";
        foreach ($reviews as $review) {
            echo "<li>{$review['title']}: {$review['content']}</li>";
        }
        echo "</ul>";
    }

    public function renderReviewDetails($review)
    {
        echo "<h2>Recensionsdetaljer</h2>";
        echo "<p>Titel: {$review['title']}</p>";
        echo "<p>Innehåll: {$review['content']}</p>";
    }

    // Lägg till fler metoder för att rendera formulär, lägga till recensioner osv.
}
