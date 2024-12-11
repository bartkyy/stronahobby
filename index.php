<?php
    function tekst()
    {
        echo "Ostatnio dodali sezon OG gdzie można grać w starego fortnite'a";
    }

    function zdj()
    {
        echo "<img id='img1' src='fn.jfif' width='250px' height: 250px;>";
    }
?>

<?php
    $conn = new mysqli('localhost', 'root', '', 'autorzy');
    if($conn->connect_error)
    {
        die("połączenie nieudane" . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt witryny - Moje Hobby</title>
</head>
<body>
    <div id="container">
        <header>
            NASZE HOBBY
        </header>
        <div id="main">
        <center>Fortnite</center>
        fortnite to jedna z najlepszych gier strzelankowych na świecie. Można w nią grać samemu jak i z ziomami. Charakteryzuje się płynna rozgrywką, pełną wrażeń i piękną grafiką.
        W fortnite można wygrywać pieniądze co sprawia ze to hobby oprócz przyjemności może się opłacać
        

        <?php
        tekst(); echo "<br>"; echo "<br>"; echo "<center>"; zdj(); echo "</center>";
        ?>
        <br> 
        gramy w nią od dziecinstwa (2017). jest ona szczególnie dla nas sentymentalna.
        </div>
        <footer>
            <?php
                $zapytanie = mysqli_query($conn, 'SELECT `imie`, `nazwisko`, `klasa` FROM autorzy');
                while ($wiersze = mysqli_fetch_row($zapytanie)) {
                echo "$wiersze[0]";
                echo " ";
                echo "$wiersze[1]";
                echo " ";
                echo "$wiersze[2]";
                echo " ";
                }
            ?>
        </footer>
    </div>
</body>
</html>
<?php
$conn->close();
?>