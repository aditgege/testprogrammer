<?php
if(isset($_POST['submit'])){
    $dari = $_POST['txtDari'];
    $sampai = $_POST['txtSampai'];
    $jenis = $_POST['pilihjenis'];
    if($jenis == "prima"){
        for($i=$dari;$i<=$sampai;$i++){
            $a = 0;
            for($j=$dari;$j<=$i;$j++){
                if($i % $j == 0){
                $a++;
            }
        }
            if($a == 2){
                echo "<h1>".$i."  Merupakan Bilangan Prima</h1> <br>";
            }
        }
    }
    else{
        for($i=$dari;$i<=$sampai;$i++){
            $a = 0;
            for($j=$dari;$j<=$i;$j++){
                if($i % $j == 0){
                $a++;
            }
        }
            if($a != 2){
                echo "<h1> $i Merupakan Bilangan Komposit</h1> <br>";
            }
        }
    }
}
    
?>