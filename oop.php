<?php
class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize the properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Getter for the title property
    public function getTitle() {
        return $this->title;
    }

    // Getter for the availableCopies property
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property
    private $name;

    // Constructor to initialize the property
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter for the name property
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo "{$this->name} borrowed '{$book->getTitle()}'".'<br>';
        } else {
            echo "Sorry, '{$book->getTitle()}' is not available for borrowing".'<br>';
        }
    }

    // Method to return a book
    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'".'<br>';
    }
}

// Usage

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print Available Copies with their names
echo "Available Copies of '{$book1->getTitle()}': " . $book1->getAvailableCopies() .'<br>';
echo "Available Copies of '{$book2->getTitle()}': " . $book2->getAvailableCopies() .'<br>';