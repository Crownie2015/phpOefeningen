<body>
    <form action="site.php" method="post">
        
        <input type="text" name="student">
        <input type="submit">
    </form>
    
    <?php
    $grades = array("Jim"=>"A+", "Pam"=>"A+", "oscar"=>"F" );
    echo $grades[$_POST['student']];
    
    
    ?>
</body>
