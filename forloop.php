<?php 
    $title ="For Loops";
    include 'includes/header.php'?>
<body>
    <h1 style="color:aqua">For Loops</h1>
    <?php
    //For Loops
    for($count=0; $count < 10; $count++){
        echo'<p>Hello World</p>';
    }
    for($count=0; $count < 10; $count++){
        echo"<p>The Count is: $count</p>";
    }
    ?>
<?php require 'includes/footer.php' ?>  