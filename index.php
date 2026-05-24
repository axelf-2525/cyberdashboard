<?php
$conn = new mysqli("localhost", "root", "", "zh");
$sql  = "SELECT * FROM dolgozo";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Control Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topbar">
    <div class="logo">CYBER CONTROL PANEL</div>
    <div class="clock" id="clock">--:--:--</div>
</div>

<div class="menu">
    <a href="index.php">Főoldal</a>
    <a href="uj.php">Új dolgozó</a>
    <a href="#">Szerverek</a>
    <a href="#">Docker</a>
    <a href="#">Kubernetes</a>
</div>

<div class="container">

    <div class="legend">
        <h2>Rendszer információ</h2>
        <p>
            Enterprise dolgozókezelő rendszer cyberpunk / DevOps dashboard kinézettel.
            A panel dolgozók listázására, hozzáadására, módosítására és törlésére szolgál.
        </p>
    </div>

    <h1>Dolgozók</h1>

    <div class="action-box">
        <a class="main-button" href="uj.php">+ Új dolgozó hozzáadása</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Cím</th>
            <th>Kor</th>
            <th>Műveletek</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nev'] ?></td>
            <td><?= $row['cim'] ?></td>
            <td><?= $row['kor'] ?></td>
            <td>
                <a class="btn edit" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="btn delete" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <div class="calculator-panel">
        <h2>JavaScript összeadás modul</h2>

        <div class="input-row">
            <input type="number" id="szam1" placeholder="Első szám">
            <input type="number" id="szam2" placeholder="Második szám">
        </div>

        <button onclick="osszead()">Összead</button>

        <p id="eredmeny"></p>
    </div>

</div>

<script>
function osszead() {
    let a = Number(document.getElementById("szam1").value);
    let b = Number(document.getElementById("szam2").value);

    let osszeg = a + b;

    document.getElementById("eredmeny").innerHTML = "Összeg: " + osszeg;
}

function updateClock() {
    let now = new Date();

    let time = now.toLocaleTimeString("hu-HU", {
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit"
    });

    document.getElementById("clock").innerHTML = time;
}

setInterval(updateClock, 1000);
updateClock();
</script>

</body>
</html>