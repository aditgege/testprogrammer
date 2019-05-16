<?php
    if(isset($_POST['balik'])){
        $input = $_POST['txtKata'];
        $balik = strrev($input);
        echo "<h1>". $input ."</h1>";
        echo "<h1>". $balik ."</h1>";
    }
?>