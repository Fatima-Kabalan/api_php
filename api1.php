<?php
    $string = $_GET['string'];

    if(strrev($string) == $string){
        echo "Palindrome";
    }
    else {
        echo "Not Palindrome";
    }
?>