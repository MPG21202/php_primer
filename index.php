<?php 
    $title = 'Home Page';
    include 'includes/header.php'
?>
    <!-- Basic HTML -->
    <h1>Hello World!! Php Primer</h1>  
 
    <?php //Printing to HTML using echo
     echo 'Hello PHP';
     echo'<br/>';
     echo 'Second Line';
        //Declare Variable
     $name = 'Michael Griffin';
     $age = 40;
        //echo variable
     echo '<br/>';
     echo $name;
        //single quotation
     echo '<h1>My Name Is: ' .$name.'</h1>';//Concantination method
     echo '<h1>And my age is: '.$age.'</h1>';
        //Double Quotes
     echo "<h1>My name is $name and my age is $age!</h1>"    
    ?>
 <?php require 'includes/footer.php' ?>  