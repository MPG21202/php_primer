<?php 
    $title = " String Manipulation";
    include 'includes/header.php'
?>
<body>
    <h1  style="color:brown ">String Manipulation</h1>
    <?php
        $phrase1 = "Student who came late";
        $phrase2 = " in class, stand with Rock";
        echo '<hr/>';       
        //Concatenation of strings
        echo $phrase1;
        echo $phrase2;
        echo '<hr/>';       
        $name = "michael griffin";
        echo '<br>';
        echo $phrase1 . ", $name, " . $phrase2;
        echo '<br>';
        //String Transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case: ' . strtoupper($name).'<br/>';
        echo 'Lower case: ' . strtolower("THIS WAS ALL UPPERCASE").'<br/>'; 
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a', 8) . '<br/>';         
        echo 'Repeat String - nested function' . strtoupper(str_repeat('a', 8)) . '<br/>';     
        echo ' Get a Substring: ' . strtoupper(substr($name, 0, 7)). '<br/>';
        echo 'Get Position of string: ' . strpos($name, 'g'). '<br/>';
        echo 'Find length of string '. strlen($name) . '<br/>';
        echo 'Without Trim '. "A" . " B C D " . "E" . '<br/>';
        //takes off any spaces
        echo 'Trim spaces on both sides; '. "A" . trim(" B C D "). "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D "). "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D "). "E" . '<br/>';

        echo ' Replace sring with another; '. str_replace("stand", "lay", $phrase2) . '<br/>';

    ?>
<?php require 'includes/footer.php' ?>  