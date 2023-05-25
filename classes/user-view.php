<?php

class UserView
{
    public function renderAllUsersAsList($users)
    {
        echo "<h2>Alla användare</h2>";
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>{$user['name']}</li>";
        }
        echo "</ul>";
    }

    public function renderUserDetails($user)
    {
        echo "<h2>Användardetaljer</h2>";
        echo "<p>Namn: {$user['name']}</p>";
    }

    public function renderAddUserForm()
    {
        echo "<h2>Lägg till användare</h2>";
        echo '<form action="process-user.php" method="POST">';
        echo '<label for="name">Namn:</label>';
        echo '<input type="text" name="name" id="name" required>';
        echo '<button type="submit">Lägg till</button>';
        echo '</form>';
    }
}
