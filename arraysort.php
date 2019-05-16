<?php
    if(isset($_POST['submit'])){
        $input = $_POST['txtarray'];
        $filter = $_POST['pilihfilter'];
        if($filter == "asc"){
            $array = str_split($input);
            echo sort($array);
            echo "<pre>";
            print_r($array);
        }else{
            $array = str_split($input);
            rsort($array);
            echo "<pre>";
            print_r($array);
        }
        
    }
?>