<?php


require_once 'classes/user-view.php';
require_once 'classes/book-view.php';
require_once 'classes/review-view.php';

require 'classes/db.php';
require 'classes/user-model.php';
require 'classes/book-model.php';
require 'classes/review-model.php';

$config = [
    'host' => 'localhost',
    'dbname' => 'bokrejset',
    'user' => 'root',
    'password' => 'abc123'
];

$pdo = connect($config);

$db = new DB($pdo);
$userModel = new UserModel($pdo);
$bookModel = new BookModel($pdo);
$reviewModel = new ReviewModel($pdo);
$userView = new UserView();
$bookView = new BookView();
$reviewView = new ReviewView();

include 'partials/header.php';
include 'partials/nav.php';

// Hämta och visa alla användare
$allUsers = $userModel->getAllUsers();
$userView->renderAllUsersAsList($allUsers);

// Hämta och visa alla böcker
$allBooks = $bookModel->getAllBooks();
$bookView->renderAllBooksAsList($allBooks);

// Visa formulär för att lägga till användare
$userView->renderAddUserForm();

// Visa formulär för att lägga till böcker
$bookView->renderAddBookForm();

// Visa formulär för att lägga till recensioner
$reviewView->renderAddReviewForm();

include 'partials/footer.php';
