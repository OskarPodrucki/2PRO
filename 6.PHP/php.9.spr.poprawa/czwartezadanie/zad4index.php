<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad4index</title>
</head>

<body>
    
    <h1>lista rekordów z bazy</h1>

    <hr>

    <ul>
        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'sprop';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sql = "SELECT `id`, `nazwa`, `cena` FROM `produkty` WHERE 1";
        $results = mysqli_query($conn, $sql);


        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<li>";
                echo "<form action='zad4edit.php' method='POST'>";
                echo "<input name='idEdit' type='hidden' value='".$row['id']."'>";
                echo $row['nazwa'] . ", " . $row['cena']." <input type='submit' value='edytuj rekordziszcze'>";
                echo "</form>";
                echo "</li>";
            }
        }

        ?>
    </ul>

</body>

</html>