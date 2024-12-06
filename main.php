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
    define("name","achraf"); // constant string
    define("age", 25); // constant number
    echo '<br>';
    echo __FILE__; // outputs file name and diractery
    echo '<br>';
    echo __dir__; // outputs file diractery
    echo '<br>';
    echo __LINE__; // outputs the current line.
    // <=> if number bigger returns 1, smaler returns -1, equale returns 0.
    
    ?>