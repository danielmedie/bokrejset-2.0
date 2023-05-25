<?php
require_once 'classes/user-view.php';
require_once 'classes/book-view.php';
require_once 'classes/review-view.php';
require_once 'classes/db.php';
require_once 'classes/user-model.php';
require_once 'classes/book-model.php';
require_once 'classes/review-model.php';
require_once 'partials/connect.php';

$pdo = connect();

$db = new DB($pdo);
$userModel = new UserModel($pdo);
$bookModel = new BookModel($pdo);
$reviewModel = new ReviewModel($pdo);
$userView = new UserView();
$bookView = new BookView();
$reviewView = new ReviewView();

include 'partials/header.php';
include 'partials/nav.php';

$allUsers = $userModel->getAllUsers();
$userView->renderAllUsersAsList($allUsers);

$allBooks = $bookModel->getAllBooks();
$bookView->renderAllBooksAsList($allBooks);

$userView->renderAddUserForm();

$bookView->renderAddBookForm();

$reviewView->renderAddReviewForm();

include 'partials/footer.php';
?>
