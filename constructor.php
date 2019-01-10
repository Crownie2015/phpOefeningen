<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
           class Book {
               var $title;
               var $author;
               var $pages;
               
               function __construct($aTitle, $aAuthor, $aPages) {
                   $this->title = $aTitle;
                   $this->author = $aAuthor;
                   $this->pages = $aPages;
               }
           }
           
           $book1 = new Book("Harry Potter", "JK Rowling", 400);
           $book1->title = "Hunger Games"; // hier kan je dus bijvoorbeeld de title apart gaan aanpassen.
           $book2 = new Book("Lord of the rings", "Tolkien", 700);
           echo $book1->title . " - " . $book1->author . " - " . $book1->pages;   
           echo "<br>";
           echo $book2->title . " - " . $book2->author . " - " . $book2->pages;  
           
        ?>
    
    </body>
</html>

