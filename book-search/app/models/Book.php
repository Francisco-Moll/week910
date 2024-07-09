<?php
class Book {
    public static function search($criteria) {
        $conn = Database::getInstance()->getConnection();
        $sql = "SELECT * FROM books WHERE 1=1";
        if (!empty($criteria['title'])) {
            $sql .= " AND title LIKE :title";
        }
        if (!empty($criteria['author'])) {
            $sql .= " AND author LIKE :author";
        }
        if (!empty($criteria['genre'])) {
            $sql .= " AND genre LIKE :genre";
        }
        $stmt = $conn->prepare($sql);
        if (!empty($criteria['title'])) {
            $stmt->bindValue(':title', '%' . $criteria['title'] . '%');
        }
        if (!empty($criteria['author'])) {
            $stmt->bindValue(':author', '%' . $criteria['author'] . '%');
        }
        if (!empty($criteria['genre'])) {
            $stmt->bindValue(':genre', '%' . $criteria['genre'] . '%');
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $conn = Database::getInstance()->getConnection();
        $stmt = $conn->prepare("SELECT * FROM books WHERE id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>