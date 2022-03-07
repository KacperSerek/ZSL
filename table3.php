<?php
/*
echo "<hr>Skrypt<hr>";
echo "<table>";
echo "<tr><th>Imie</th><th>Nazwisko</th></tr>";
echo "<tr><td>Kacper</td><td>Serek</td></tr>";
echo "<tr><td>Masny</td><td>Benik</td></tr>";
echo "</table>";
*/

//heredoc
/*
echo <<< TABLE
    <table>
        <tr><th>Imie</th><th>Nazwisko</th></tr>
        <tr><td>Kacper</td><td>Serek</td></tr>
        <tr><td>Masny</td><td>Benik</td></tr>
    </table>
*/
echo <<< TABLE
    <table>
        <tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        </tr>
TABLE;
    for($i=1; $i<=5; $i++) {
        echo <<< ROW
        <tr>
            <td>Imie$i</td>
            <td>Nazwisko$i</td>
        </tr>
ROW;
    }
echo "</table>";
?>