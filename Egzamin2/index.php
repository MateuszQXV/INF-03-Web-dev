<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfigurator samochodów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'samochody';

$conn = new mysqli($host,$user,$pass,$dbname);

    if(!$conn){
        die('Failed connection:' . mysqli_connect_error());
    }
?>
    <header>
    <h1>Serwis konfiguracji samochodów</h1>
    </header>
    <nav>
    <h2>Samochody</h2>
    <h2>Konfigurator</h2>
    <h2>Kontakt</h2>
    </nav>
    <main>
        <section class="left">
        <?php

	    $query = "SELECT marka, model, cena, nazwa, doplata FROM pojazdy INNER JOIN kolory ON kolor = kolory.id WHERE model = 'alfa';";
	    $result = $conn->query($query);
	
	    while ($row = $result->fetch_assoc()) {
	        $cena_calkowita = $row['cena'] + $row['doplata'];
	
            echo "<tr>";
            echo "<td>" . $row['marka'] . "</td>";
	        echo "<td>" . $row['model'] . "</td>";
	        echo "<td>" . $row['nazwa'] . "</td>";
            echo "<td>" . $cena_calkowita . "</td>";
            echo "</tr>";
        }


        ?>
        </section>
        <section class="middle">
        <table>
            <tr>
                <td colspan="3">
                    <img src="a1.jpg">
                </td>
            </tr>
            <tr>
                <td>Marka</td>
                <td>BM</td>
                <td>9400</td>
            </tr>
            <tr>
                <td>Model</td>
                <td>Model</td>
                <td></td>
            </tr>
        </table>
        </section>
        <section class="right">
            <h3>111 222 444</h3>
            <img src="a3.png" alt="Samochód">

        </section>
    </main>
<footer>
<p>Stronę wykonał: suka</p>
</footer>
</body>
</html>