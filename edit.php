<?php
    $conn = new mysqli("localhost" , "root", "", "zh");

    $id = $_GET['id'];
    $sql = "SELECT * FROM dolgozo WHERE id = $id";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if($_SERVER ["REQUEST_METHOD"] == "POST") {
        $nev = $_POST['nev'];
        $cim = $_POST['cim'];
        $kor = $_POST['kor'];

        $update = "UPDATE dolgozo SET nev='$nev', cim = '$cim', kor='$kor' WHERE id = '$id'";

        $conn->query($update);

        header("Location: index.php");
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolgozók módosítása</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="edit.php?id=<?= $id ?>">
    <input type="text" name="nev" value="<?= $row['nev'] ?>">
        <br>
    <input type="text" name="cim" value="<?= $row['cim'] ?>">
        <br>
    <input type="text" name="kor" value="<?= $row['kor'] ?>">
        <br>
       
    <button type="submit"> Módosít </button>
</form>


</body>
</html>

