<?php

$i = 1;


print"<table border ='1'>";
 while($i<=42){
     if($i%7==1){
         print "<tr>";
     }
     print "<td>" . $i . "</td>";
     $i++;
     if($i%7==1){
        print "</tr>";
    }
 }

print "</table>";