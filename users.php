<?php
require_once 'classes/user-view.php';

$pdo = require_once 'partials/connect.php';

$userView = new UserView($pdo);

include 'partials/header.php';
include 'partials/nav.php';

$userView->renderAllUsersAsList();

include 'partials/footer.php';
