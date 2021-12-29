<?php 
    $title = "Date & Time Manipulation";
    include 'includes/header.php'
?>
<body>
    <h1 style="color: pink">Date and Time Manipulation</h1>
    <?php
    $datenow = getdate();
    echo "Todays's Date <br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow['mon'] . '<br/>';
    echo $datenow['year'] . '<br/>';
    echo "Today's Date: " .  $datenow['mon'] .'/'. $datenow['mday'] . '/' . $datenow['year'] . '<br/>';
    echo time() . '<br/>';

    print date("m/d/y G.i:s<br/>", time()) . '<br/>';
    print "Today is ";
    print date("j of F Y, \a\\t g.i.a", time());
    
    ?>
<?php require 'includes/footer.php' ?>  