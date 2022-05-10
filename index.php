<!DOCTYPE html>
<html lang="RU">
<head>
    <title></title>
<style>
table {
    border-collapse: collapse;
    margin: 30px;
}

table td {
    border: solid 2px;
    padding: 10px;
    line-height: 20px;
}

table td[text*="1"] {
    color: red;
}

span.red {
    color: red;
}

span.green {
    color: green;
}

span.yellow {
    color: yellow;
}

span.blue {
    color: blue;
}
</style>
</head>
<body>
<header></header>
<nav>
    <ul>
        <li><a href="#multTbl">Урок 1</a></li>
        <li><a href="#multTblColor">Урок 2</a></li>
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
    <table id="multTblColor">
<?php
function colorize(string $str){
    $result = str_replace('1','<span class="red">1</span>', $str);
    $result = str_replace('2','<span class="green">2</span>', $result);
    $result = str_replace('3','<span class="yellow">3</span>', $result);
    $result = str_replace('4','<span class="blue">4</span>', $result);
    
    return $result;
}   
    $mtable = '';
    for($i=1; $i<=10; $i++){
        if($i == 1) $mtable .= "<tr>";
        $mtable .= "<td>";
        for($j=1; $j<=10; $j++){
            $mtable .= "$i x $j = ".$i*$j."</br>";
        }
        $mtable .= "</td>";
        if($i == 5) $mtable .= "</tr><tr>";
        if($i==10) $mtable .= "</tr>";
    }
    echo colorize($mtable);
?>
    </table>
    
</main>
<footer></footer>
</body>
</html>