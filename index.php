<?php
require_once 'config/database.php';
require_once 'app/controllers/BookController.php';

// Routing
$controller = new BookController();
if (isset($_GET['action']) && $_GET['action'] == 'detail' && isset($_GET['id'])) {
    $controller->detail($_GET['id']);
} else {
    $controller->search();
}
?>