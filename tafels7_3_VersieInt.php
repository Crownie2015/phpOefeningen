<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <style type="text/css">table {} td {border:1px solid black; width:50px;}</style>
        <title>phpoefening006bis - Joren Van Hocht</title>
    </head>
    <body>
        <table>
        <tr>
            
            <?php
                $tafel = 0;
                $maal = 0;
            
            do {
                while($maal <= 10) {
                $result = $tafel * $maal;
                 echo '<td>' .$result . '</td>';
            
                $maal++;
                if($maal == 11) {
              
                    $maal = 0;
                    $tafel++;
            ?>
                
        </tr>
        <tr>
        <?php
                }
                  if($tafel == 11) {
                    return false;
                  }
                 }
                }while($tafel <=11);
            ?>
        </tr>
        </table>
    </body>
</html> 