<?php
class Book
{
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;
    public function __construct($title, $availableCopies)
    {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    // TODO: Add getTitle method

    public function getTitle()
    {
        return $this->title;
    }
    // TODO: Add getAvailableCopies method


    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    // TODO: Add borrowBook method

    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            
        } else {
            echo "Sorry, '{$this->title}' is currently not available <br>";
        }
    }


    // TODO: Add returnBook method
    public function returnBook()
    {
        $this->availableCopies++;
    }
}


class Member
{
    // TODO: Add properties as Private

    private $name;

    public function __construct($name)
    {
        // TODO: Initialize properties
        $this->name = $name;
    }



    // TODO: Add getName method
    public function getName()
    {
        return $this->name;
    }

    // TODO: Add borrowBook method

    public function borrowBook(Book $book)
    {
        $book->borrowBook();
    }



    // TODO: Add returnBook method
    public function returnBook(Book $book)
    {
        $book->returnBook();
    }
}
// TODO: Create 2 books with the following properties
//Book 1 - Name: The Great Gatsby, Available Copies: 5.
//Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

// Create books
$Book1 = new Book("The Great Gatsby", 5);
$Book2 = new Book("To Kill a Mockingbird", 3);


// TODO: Create 2 members with the following properties
//Member 1 - Name: John Doe
//Member 2 - Name: Jane Smith

// Create members
$Member1 = new Member("John Doe");
$Member2 = new Member("Jane Smith");

// TODO: Apply Borrow book method to each member
$Member1->borrowBook($Book1);
$Member2->borrowBook($Book2);

echo "Available Copies of '{$Book1->getTitle()}': {$Book1->getAvailableCopies()}\n";
echo "Available Copies of '{$Book2->getTitle()}': {$Book2->getAvailableCopies()}\n";
