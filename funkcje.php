<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figury geometryczne</title>
</head>
<body>
    <h3>Figury geometryczne - obliczanie pola</h3>
    <form method="post">
        <input type="radio" name="figure" value="cube" checked>Sześcian
        <input type="radio" name="figure" value="rectangle" checked>Prostokąt<br><br>
        <input type="submit" value="Zatwierdź">
    </form>
    <?php
    if(!empty($_POST['figure'])){
        echo "Wypełnij dane<br>";
        echo '<form action="./scirpts/cube.php" method="post">';
        switch($_POST['figure']){
            case 'cube':
                echo '<input type="text" name="a" placeholder="Podaj a"><br><br>'
                break;
            case 'rectangle'
                echo '<input type="text" name="a" placeholder="Podaj a"><br><br>';
                echo '<input type="text" name="b" placeholder="Podaj b"><br><br>';
                break;
        }
        echo '<input type="submit" value="Zatwierdź"></form>';
    }
    ?>
<body>
</html>