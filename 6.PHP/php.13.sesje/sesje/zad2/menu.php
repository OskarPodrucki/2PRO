
<?php

if (!isset($_SESSION['visitCounter'])) {
    $_SESSION['visitCounter'] = 1;
} else {
    $_SESSION['visitCounter']++;
}

echo "<h1>Liczba odwiedzin: " . $_SESSION['visitCounter'] . "</h1>";

echo
"<ul>
<li><a href='./'>strona główna</a></li>
<li><a href='./strona.php'>strona</a></li>
</ul>
";

