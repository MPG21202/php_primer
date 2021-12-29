<?php 
    $title = "Switch Statements";
    include 'includes/header.php'
?>
<body>
    <h1 style="color: grey">Switch Statements</h1>
    <?php
    $grade = 'D';
    switch($grade){
        case 'A':
            echo '<h4>YOU ARE A SUPERSTAR</h4>';
            break;
        case 'B':
            echo '<h4>You did well!!</h4>';
            break;
        default:
            echo '<h4>You Have failed!!!</h4>';
            break;
    }
    ?>
<?php require 'includes/footer.php' ?>  