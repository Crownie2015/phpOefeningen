<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
           class Student {
               var $name;
               var $major;
               var $gpa;
               
               function __construct($name, $major, $gpa) {
                   $this->name = $name;
                   $this->major = $major;
                   $this->gpa = $gpa;
               }
               
               function hasHonors(){
                   if ($this->gpa >= 3.5){
                       return "true"; // normaal geven we enkel true of false mee (nu in string)
                   }
                   return "false";
               }
               
           }// einde class student
           
           
           $student1 = new Student("Jim", "Business", 2.8);
           $student2 = new Student("Pam", "Art", 3.6);
           
           echo $student1->hasHonors();
           
           
        ?>
    
    </body>
</html>

