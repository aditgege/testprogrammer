<?php
    if(isset($_POST['tampilgangen'])){
        $dari = $_POST['txtDari']; 
        $sampai = $_POST['txtSampai'];
        $jenis = $_POST['pilihjenis'];
        echo "<h1><center>".$jenis."</center></h1>";
        echo "<hr>";
        for($i = $dari; $i<=$sampai; $i++){
            if($jenis == "ganjil"){
                if($i % 2 == 1){
                    echo "<h1> Angka " .$i."</h1>";
                }
            }
            else{
                if($i % 2 == 0){
                    echo "<h1> Angka ".$i."</h1>";
                }
            }
        }
    }
?>