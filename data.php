<?php
    echo "<h4>Pobrane dane z formularza</h4>";
    //print_r($_POST);
    $error=0;
    if (!isset($_POST['gender'])) {
        echo "<script>history.back();</script>";
        exit();
    }
    foreach ($_POST as $key => $value) {
        //echo "$key:$value<br>";
         if (empty($value)) {
            $error=1;
            echo "<script>history.back();</script>";
        }
     }
    echo <<<DATA
        Imię i nazwisko: $_POST[name] $_POST[surname]<br>
        Miasto: $_POST[city]<br>
        Płeć: $_POST[gender]<br>
DATA;
?>