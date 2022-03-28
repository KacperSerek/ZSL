<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="./zadanie_dane.php" method="post">
        <td>Company: </td>
        <input type="text" name="Company"><br><br>
        <td>First Name: </td>
        <input type="text" name="First"><br><br>
        <td>Last Name: </td>
        <input type="text" name="Last"><br><br>
        <td>Email: </td>
        <input type="text" name="Email"><br><br>
        <td>Title: </td>
        <input type="text" name="Title"><br><br>
        <td>Phone Number: </td>
        <input type="text" name="Phone"><br><br>
        <td>Cancel Registration: </td>
        <input type="checkbox" name="Registartion"><br><br>
        <td>252 Training Session 2010: </td>
        <input type="date" name="Date"><br><br>
        <td>Job Function: </td><br><br>
        <input type="radio" name="Data" value="Campaign Management">Campaign Management<br><br>
        <input type="radio" name="Data" value="CRM Administrations">CRM Administrations<br><br>
        <input type="radio" name="Data" value="Email Deployment">Deployment<br><br>
        <input type="radio" name="Data" value="Partner">Partner<br><br>
        <input type="radio" name="Data" value="Employee">Employee<br><br>
        <td>Dietary Requirements: </td>
        <input typie="text" name="Requirements"><br><br>
        <td>Expectations: </td>
        <textarea name="Expectations"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>  
</body>
</html>