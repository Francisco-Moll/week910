<?php
require_once 'app/models/Book.php';

class BookController {
    public function search() {
        $books = Book::search($_GET);
        include 'app/views/book/search.php';
    }

    public function detail($id) {
        $book = Book::find($id);
        include 'app/views/book/detail.php';
    }
}
?>