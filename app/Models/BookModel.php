<?php

declare(strict_types=1);

namespace App\Models;

use App\App;
use App\DB;
use PDO;

class BookModel
{
    private DB $db;

    public function __construct()
    {
        $this->db = App::db();
    }
    public function getAllBooks() : array
    {
        try {
            $query = "SELECT * FROM books";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $e) {
            echo $e;
            return [];
        }
    }

    public function addNewBook(string $title, string $author, string $genre, string $bookcover) : bool
    {
        try {
            $query = "INSERT INTO books (title, author, genre, bookcover)
            VALUES(:title, :author, :genre, :bookcover)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam('title', $title);
            $stmt->bindParam('author', $author);
            $stmt->bindParam('genre', $genre);
            $stmt->bindParam('bookcover', $bookcover);
            $stmt->execute();
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $e) {
            echo $e;
            return false;
        }
    }

    public function findBookById(string $id) : array
    {
        try {

            $query = "SELECT * FROM books WHERE id = $id";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $book = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $book;
        } catch (\Throwable $e) {
            echo $e;
            return [];
        }
    }

    public function editBook(string $title, string $author, string $genre, string $bookcover, string $id) : bool
    {
        try {
            $query = "UPDATE books SET title = :title, author = :author, genre = :genre, bookcover = :bookcover WHERE id = $id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':genre', $genre);
            $stmt->bindParam(':bookcover', $bookcover);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public function deleteBook(string $id) : bool
    {
        try {
            $query = "DELETE FROM books WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e;
            return false;
        }

    }
}