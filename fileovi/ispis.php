<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 22.11.2017.
 * Time: 8:37
 */
$file=fopen("osoba.txt", "r");
echo "<table>";
while(!feof($file)) {
    $var = fgets($file);
    echo "<tr>"."<td>".$var."</td>"."</tr>";
}
echo "</table>";
fclose($file);
?>