<?php
    if (isset($_POST['pangkat'])){
        $bilangan = $_POST['txtBilangan'];
        $pangkat = $_POST['txtPangkat'];
        $hasil = pow($bilangan,$pangkat);
        echo "<h1>"." hasil ".$bilangan." pangkat ".$pangkat." adalah ".$hasil."</h1>";
    }
?>