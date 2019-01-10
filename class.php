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
           }
           
           $book1 = new Book;
           $book1->title = "Harry Potter";
           $book1->author = "JK Rowling";
           $book1->pages = 400;
           
           $book2 = new Book;
           $book2->title = "Lord of the rings";
           $book2->author = "Tolkien";
           $book2->pages = 700;

           echo $book1->title . " - " . $book1->author . " - " . $book1->pages;   
           echo "<br>";
           echo $book2->title . " - " . $book2->author . " - " . $book2->pages;  
           
        ?>
    
    </body>
</html>

