<!DOCTYPE html>
<html lang="RU">
<head>
    <title></title>
</head>
<body>
<header></header>
<nav>
    <ul>
        <li><a href="#multTbl">Урок 1</a></li>
        <li><a href="#multTblColor">Урок 2</a></li>
        <li><a href="#reverseForm">Урок 3</a></li>
    </ul>
</nav>
<main>
<p class="result">
<?php
if(isset($_POST['textInput'])){
    $str = iconv('utf-8', 'windows-1251', $_POST['textInput']);
	$str = strrev($str);
	$str = iconv('windows-1251', 'utf-8', $str);
  echo $str; 
}
?>
    </p>
    <form action="/" method="post"><button type="submit">Back</button></form>
</main>
<footer></footer>
</body>
</html>