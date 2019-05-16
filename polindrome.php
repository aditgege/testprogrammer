<?php 
    if(isset($_POST['submitPolidrome'])){
        $input = $_POST['txtPolindrome'];
        if($input == strrev($input)){
            echo "<h1>kalimat tersebut merupakan polindrome</h1>";
        }
        else{
            echo "<h1>kalimat tersebut bukan polindrome</h1>";
        } 
    }
?>