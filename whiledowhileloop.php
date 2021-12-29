<?php 
    $title = "While/DoWhileLoops";
    include 'includes/header.php'
?>
<body>
    <h1 style="color:cadetblue">While Loops</h1>
    <?php
        $grade = 0;
        //infinte loop
        //while($grade < 10){
        //  echo '<p>I am less than 10!</p>';
        // }
        // Pre-Condition Loop
        while($grade < 10){
            echo '<p>I am less than 10!</p>';
            $grade++; 
        }  
        echo 'Exit Loop';

    ?>
    <h1 style="color:coral">Do-While Loops</h1>
    <?php
        //Post Condition Loop
        $grade = 0;
        do{
            echo '<p>I am do while Loop?</p>';
            $grade++;
        }while($grade < 10);
        echo 'Exit Loop';
    ?>
<?php require 'includes/footer.php' ?>  