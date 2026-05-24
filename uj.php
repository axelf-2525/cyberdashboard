<?php
    $conn = new mysqli("localhost", "root", "", "zh");

    if($_SERVER["REQUEST_METHOD"] == "POST") {

    $nev = $_POST['nev'];
    $cim = $_POST['cim'];
    $kor = $_POST['kor'];

    $sql = "INSERT INTO dolgozo(nev, cim, kor) VALUES('$nev', '$cim', '$kor')";

    $conn->query($sql);

    header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Új dolgozó hozzáadása</h1>
    <form method="POST">

    <input type="text" name="nev" placeholder="nev">
    <br>
    <input type="text" name="cim" placeholder="cim">
    <br>
    <input type="text" name="kor" placeholder="kor">
    <br>
    <button type="submit"> Hozzáadás</button>
</form>



</body>
</html>
