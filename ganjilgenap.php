<?php
    if(isset($_POST['ganjilgenap'])){
        $input = $_POST['txtBilangan']; 

        if($input % 2 == 1){
            echo "<h1>bilangan".$input."merupakan bilangan Ganjil</h1>";
        }
        else{
            echo "<h1> Angka ".$input." merupakan bilangan Genap</h1>";
        }
    }
?>