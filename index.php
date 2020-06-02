<!DOCTYPE html>
<html>
<head>
	<title><?php 
	$myTitle = "The First PHP Page"; 
	echo $myTitle;
	?></title>
</head>
<body>
	<?php 
	$myH1 = "Hello, World!!"; 
	?>
	<?php echo "<h1>$myH1</h1>" ?>
	<p><?php 
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?></p>

<?php
$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true? - Так как сравнения только по значению
var_dump((int)'012345');                        // Почему 12345?
var_dump((float)123.0 === (int)123.0); // Почему false? Так как сравнение еще и по типу
var_dump((int)0 === (int)'hello, world'); // Почему true? Сравнение числа и строки
?>

<?php
//5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.
	$varA = 1;
	$varB = 2;
?>

</body>
</html>