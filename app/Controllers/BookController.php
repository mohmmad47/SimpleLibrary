<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\BookModel;
use App\View;
use GrahamCampbell\ResultType\Success;

class BookController
{

    // private BookModel $bookModel;
    public function __construct()
    {

    }

    public function displayAllBooks() : View
    {
        try {
            $bookModel = new BookModel();

            $books = $bookModel->getAllBooks();

            return View::make('Home/homepage', $books);
        } catch (\Throwable $th) {
            echo $th;
            return View::make('error/404');
        }
    }

    public function ViewOfAddBookPage() : View
    {
        return View::make('Home/addbookpage');
    }
    public function ViewOfEditBookPage(array $id = []) : View
    {
        $bookModel = new BookModel();

        $books = $bookModel->findBookById($id['id']);

        foreach ($books as $book) {

        }

        return View::make('Home/editbookpage', $book);
    }

    public function AddNewBook()
    {
        $bookModel = new BookModel();

        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $title = $_POST['title'];
                $author = $_POST['author'];
                $genre = $_POST['genre'];
                $bookcover = $_POST['bookcover'];

                $successful = $bookModel->addNewBook($title, $author, $genre, $bookcover);

                if ($successful) {

                    return $this->displayAllBooks();

                }
                return View::make('error/404');
            }
        } catch (\Exception $e) {
            echo $e;
            return View::make('error/404');
        }

    }

    public function EditBoook(array $id = [])
    {
        $bookModel = new BookModel();


        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $title = $_POST['title'];
                $author = $_POST['author'];
                $genre = $_POST['genre'];
                $bookcover = $_POST['bookcover'];

                $successful = $bookModel->editBook(
                    $title,
                    $author,
                    $genre,
                    $bookcover,
                    $id['id']
                );

                if ($successful) {

                    return $this->displayAllBooks();

                }
                return View::make('error/404');
            }
        } catch (\Exception $e) {
            echo $e;
            return View::make('error/404');
        }
    }

    public function DeleteBook(array $id)
    {
        try {
            $bookModel = new BookModel();

            $successful = $bookModel->deleteBook($id['id']);

            if ($successful) {

                return $this->displayAllBooks();

            }
            return View::make('error/404');

        } catch (\Exception $e) {
            echo $e;
            return View::make('error/404');
        }
    }
}