<?php 
    $title = "If Statements";
    include 'includes/header.php'
?>
<body>
<h1>If Statements</h1>
    <?php
    //An if statement that will carry out an action based on the value of the variable.
    echo '<h2>If Statement</h2>';
    $grade = 95;
    // == equal, > greater than, < less than, >=, or <=, ===, !=
    if($grade >= 50){
        echo '<h3  style="color: green">YOU HAVE PASSED</h3>';
    }
    else{
        echo '<h3  style="color: red">YOU HAVE FAILED</h3>';
    }
    $grade ='B';
    //If-Else If-Else
    if($grade == 'A'){
        echo '<h2style="color: Green">You are a superstar</h2>';
    }
    elseif($grade=='B'){
        echo '<h2 style="color: Blue">You did well</h2>';
    }
    else{
        echo '<h2 style="color: red" >You have failed....</h2>';
    }

    ?>
<?php require 'includes/footer.php' ?>  