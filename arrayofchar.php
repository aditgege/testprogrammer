<?php
    if(isset($_POST['arrayofchar'])){
        $input = $_POST['txtarray'];

        // echo $input;
        $array = str_split($input);
        echo "<pre>";
        print_r($array);
    }
?>