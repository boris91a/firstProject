<!DOCTYPE html>
<html lang="RU">
<head>
    <title></title>
<style>
table {
    border-collapse: collapse;
}

table td {
    border: solid 2px;
    padding: 10px;
    line-height: 20px;
}
</style>
</head>
<body>
<header></header>
<nav>
    <ul>
        <li><a href="#multTbl">Урок 1</a></li>
        <li><a href="#">Урок 2</a></li>
    </ul>
</nav>
<main>
    <p>Hello, <b>NIX Education</b></p>
    <table id="multTbl">
<?php
    for($i=1; $i<=10; $i++){
        if($i == 1) echo "<tr>";
        echo "<td>";
        for($j=1; $j<=10; $j++){
            echo "$i x $j = ".$i*$j."</br>";
        }
        echo "</td>";
        if($i == 5) echo "</tr><tr>";
        if($i==10) echo "</tr>";
    }
?>
    </table>
</main>
<footer></footer>
</body>
</html>