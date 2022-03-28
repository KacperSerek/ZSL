<?php
    echo "<h4>Data: </h4><br>";
    echo <<<DATA
        Company: $_POST[Company]<br>
        First Name: $_POST[First]<br>
        Last Name: $_POST[Last]<br>
        Email Address: $_POST[Email]<br>
        Title: $_POST[Title]<br>
        Phone Number: $_POST[Phone]<br>
        Date: $_POST[Date]<br>
        Data: $_POST[Data]<br>
        Diatery Requirements: $_POST[Requirements]<br>
        Expactations: $_POST[Expectations]<br>
DATA;
?>