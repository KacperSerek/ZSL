<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
</head>
<body>
    <h4>Dane użytkownika</h4>
    <form method="get">
        <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
        <input type="password" name="password" placeholder="Podaj hasło"><br><br>
        <input type="submit" value="Zatwierdź">
    </form>
    <?php
        //echo $_GET['surname'];
        if (!empty($_GET['surname']) && !empty($_GET['password'])) {
            echo "Nazwisko: $_GET[surname]<br>", "hasło: $_GET[password]";
        }
    ?>
</body>
</html>