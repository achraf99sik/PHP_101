<?php 
    echo "hi my name is $name $achraf I'm $age years old now I am learning php";// $achraf or ${$name}
    echo '<br>';
    $x = "word";
    $y = $x; // normal assign by value
    $y = &$x; // assign by reference this means the y value is and x value are entangled now(linked)
    echo 'variables called like this:';
    echo '<br>';
    echo 'hi my name is $name I\'m $age years old now I am learning php';
    echo '<br>';
    print("hi future me this is another way to write a string");
    echo '<br>';
    echo $_GET['email'];
    ?>