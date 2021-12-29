<?php 
    $title = "Functions";
    include 'includes/header.php'?>
<body>
    <h1 style="color:blue">Functions</h1>
    <?php
    //define a function
    function writeMessage(){
            echo "You are a really nice person! <br/>";
    }
    //calling a function
    writeMessage();
    echo "<hr/>";
    writeMessage();
    //Function with Parameters
    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }
    /*Pass by reference - use ampersand in Parameter*/
    function changeNum(&$num){
        $num = $num + 10;
        // $num+=10;
    }
    function returnproduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    $num = 523;
    addFunction(25, 33);
    addFunction(10, $num);
    echo $num . '<br/>';
    
    addFunction('10', "50");

    changeNum($num);
    echo $num . '<br/>';
    $return_value = returnProduct(10,200);
    echo $return_value . '<br/>';
    ?>
<?php require 'includes/footer.php' ?>  