<?php
require_once 'classes/author-model.php';

$authorModel = new AuthorModel(require_once 'partials/connect.php');
?>

<form action="form-handlers/book-form-handler.php" method="post">
    <div>
        <label for="title">Titel: </label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="year">Publicerad år: </label>
        <input type="text" name="year" id="year">
    </div>
    <div>
        <label for="author">Författare:</label>
        <select name="author-id" id="author">
            <option value="">--Välj författare--</option>

            <?php
            $authors = $authorModel->getAllAuthors();
            foreach ($authors as $author) {
                echo "<option value='{$author['id']}'>
                    {$author['firstname']} {$author['lastname']}
                </option>";
            }
            ?>

        </select>
    </div>
    <button type="submit">Lägg till bok</button>
</form>
