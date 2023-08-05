<!DOCTYPE html>
<html>
<body>
	<h1>My first PHP page</h1>
	<?php
	//Print the statement
	echo "Hello World";
	?>
	<?php
	#php case sensitive
	ECHO "Hello World<br>";
	echo "Hello World<b>";
	EcHo "Hello World<br>";
	?>
	<?php
	/*Declare a variable and it is case sensitive*/
	$color = "Susma";
	echo "My Name is " . $color . "<br>";
	echo "I am " . $color . "<br>";
	echo "Sumathi's daughter is " . $color . "<br>";
	?>
	<?php 
	//Declare a variable and print it
	$x = 5+5;
	echo $x;
	echo "<br>";
	?>
	<?php
	//Declare characters in double quotes and numbers without quotes  
	$txt = "Susma";
	$y = 1;
	$z = 2.9;

	echo $txt;
	//Bring cursor to next line
	echo "<br>";
	echo $y;
	echo "<br>";
	echo $z;
	echo "<br>";
	//Using of variables
	echo "I love $txt!";
	echo "<br>";
	echo $y + $z;
	echo "<br>";
	?>
	<?php
	$a = 5; // global scope
	function MyFunction() {
	// using x inside this function will generate an error
		echo "<p>Value of a inside function is: $a</p>";
	} 
	MyFunction();
	echo "<p>Value of a outside function is: $a</p>";
	?>
	<?php 
	function MyFunc() {
		$b = 20; //local scope
		echo "<p>Value of a inside function is: $b</p>";
	}
	MyFunc();
	echo "<p>Value of a outside function is: $b</p>";
	?>
	<?php
	$r = 11;
	$s = 22;
	function Add() {
		global $r, $s; //Using global keyword
		$s = $r + $s;
	}
	Add();
	echo $s;
	echo "<br>";
	?>
	<?php
	$g = 33;
	$h = 44;
	function GlobalAdd() {
		$GLOBALS['h'] = $GLOBALS['g'] + $GLOBALS['h']; //Using GLOBAL keyword
	}
	GlobalAdd();
	echo $h;
	echo "<br>";
	?>
	<?php
	function StaticFunc() {
		static $d = 2; //Using static keyword
		echo $d;
		$d++;
	}
	StaticFunc();
	echo "<br>";
	StaticFunc();
	echo "<br>";
	StaticFunc();
	echo "<br>";
	?>
	<?php
	//Print statements with echo and double quotes
	echo "<h2>PHP is Fun!</h2>";
	echo "Hello World!<br>";
	echo "I'm about to learn PHP!<br>";
	echo "This ", "string ", "was ", "made ", "with multiple parameters";
	?>
	<?php 
	$txt1 = "Learn PHP";
	$txt2 = "Susma";
	$u = 6;
	$o = 8;
	echo "<h2>" . $txt1 . "</h2>";
	echo "I am " . $txt2 . " from Coimbatore<br>";
	echo $u+$o;
	?>
	<?php
	//Using print to print the statements
	print "<h2>PHP is Fun!</h2>";
	print "Hello World!<br>";
	print "I'm about to learn PHP!<br>";
	?>
	<?php 
	$txt1 = "Learn PHP";
	$txt2 = "Susma";
	$u = 6;
	$o = 8;
	print "<h2>" . $txt1 . "</h2>";
	print "I am " . $txt2 . " from Coimbatore<br>";
	print $u+$o;
	print "<br>";
	?>
	<?php
	$i = 76745;
	$j = 54.983;
	$days = array("Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat");
	var_dump($i);
	print "<br>";
	var_dump($j);
	print "<br>";
	var_dump($days);
	print "<br>";
	?>
	<?php
	//Declare an object
	class Transport {
		public $vehicle;
		public $model;
		public $color;
		public function __construct($vehicle, $model, $color) {
			$this->vehicle = $vehicle;
			$this->model = $model;
			$this->color = $color;
		}
		public function printTransport() {
			return "The vehicle is " . $this->vehicle . " " . $this->model . " " . $this->color;
		}
	}
	$varTransport = new Transport("Car", "Hyundai", "Blue");
	echo $varTransport -> printTransport();
	echo "<br>";
	$varTransport = new Transport("Bike", "Pulsar", "Black");
	echo $varTransport -> printTransport();
	echo "<br>";
	?>
	<?php
	$p = "PHP";
	$p = null; //Declare a null value
	var_dump($p);
	echo "<br>";
	?>
	<?php
	//Functions of String
	echo strlen("Rakshana Dinesh");
	echo "<br>";
	echo str_word_count("Rakshana Dinesh");
	echo "<br>";
	echo strrev("Rakshana Dinesh");
	echo "<br>";
	echo strpos("Rakshana Dinesh", "Dinesh");
	echo "<br>";
	echo str_replace("Dinesh", "Srijith", "Rakshana Dinesh");
	echo "<br>";
	?>
	<?php
	//Functions of Numbers
	$p = 9263;
	var_dump(is_int($p));
	echo "<br>";
	$q = 92.63;
	var_dump(is_int($q));
	echo "<br>";
	$r = 47.8263;
	var_dump(is_float($r));
	echo "<br>"; 
	$s = 3.54e4634;
	var_dump($s);
	echo "<br>";
	$t = asin(79);
	var_dump($t);
	echo "<br>";
	$a = 2787;
	var_dump(is_numeric($a));
	echo "<br>";
	$b = "4335";
	var_dump(is_numeric($b));
	echo "<br>";
	$c = "6622" + 2834;
	var_dump(is_numeric($c));
	echo "<br>";
	$d = "Sumathi";
	var_dump(is_numeric($d));
	echo "<br>";
	$e = 986326.763;
	$int_cast = (int)$e;
	echo $int_cast;
	echo "<br>";
	$f = "986326.763";
	$int_cast = (int)$f;
	echo $int_cast;
	echo "<br>";
	?>
	<?php
	//Math Functions
	echo (pi() . "<br>");
	echo (min(55, 83, 9, 24, -2, 76, -76, 82) . "<br>");
	echo (max(55, 83, 9, 24, -2, 76, -76, 82) . "<br>");
	echo (abs(-928) . "<br>");
	echo (abs(73) . "<br>");
	echo (sqrt(81) . "<br>");
	echo (round(0.78) . "<br>");
	echo (round(0.32) . "<br>");
	echo (round(9.23) . "<br>");
	echo (round(-5.373) . "<br>");
	echo (round(3.886) . "<br>");
	echo (round(-2.67) . "<br>");
	echo (rand() . "<br>");
	echo (rand(65, 98) . "<br>");
	?>
	<?php
	//Declare a php constant using define
	define("Intro", "I am Susma from SNS College of Engineering");
	echo Intro;
	echo "<br>";
	//Using constant functions globally
	define("GREETING", "I am Susma from SNS College of Engineering");
	function CallGreeting() {
		echo GREETING;
	}
	CallGreeting();
	echo "<br>";
	//Declare a constant array using define
	define("names", ["Susma", "Rakshana", "Prathiksha"]);
	echo names[2];
	echo "<br>";
	?>
	<?php
	$a = 72;
	$b = 49;
	//Arithmetic Operators
	echo $a + $b;
	echo "<br>";
	echo $a - $b;
	echo "<br>";
	echo $a * $b;
	echo "<br>";
	echo $a / $b;
	echo "<br>";
	echo $a % $b;
	echo "<br>";
	echo $a ** $b;
	echo "<br>";
	//Assignment Operators
	$c = 20;
	echo $c;
	echo "<br>";
	$c += 15;
	echo $c;
	echo "<br>";
	$c -= 15;
	echo $c;
	echo "<br>";
	$c *= 15;
	echo $c;
	echo "<br>";
	$c /= 15;
	echo $c;
	echo "<br>";
	$c %= 15;
	echo $c;
	echo "<br>";
	//Comparison Operators
	var_dump($a==$b);
	echo "<br>";
	var_dump($a!=$b);
	echo "<br>";
	var_dump($a<>$b);
	echo "<br>";
	var_dump($a>$b);
	echo "<br>";
	var_dump($a<$b);
	echo "<br>";
	var_dump($a>=$b);
	echo "<br>";
	var_dump($a<=$b);
	echo "<br>";
	$d = "100";
	var_dump($a === $d);
	echo "<br>";
	var_dump($a !== $d);
	echo "<br>";
	$z = 9;
	$y = 17;
	echo ($z <=> $y);
	echo "<br>";
	$w = 34;
	$v = 34;
	echo ($w <=> $v);
	echo "<br>";
	$t = 71;
	$u = 29;
	echo ($t <=> $u);
	echo "<br>";
	//Increment and Decrement Operators
	echo ++$a;
	echo "<br>";
	echo $a++;
	echo "<br>";
	echo --$a;
	echo "<br>";
	echo $a--;
	echo "<br>";
	//Logical Operators
	if($a==72 and $b==49) {
		echo "Hello World";
	}
	echo "<br>";
	if($a==72 or $b==49) {
		echo "Hello World";
	}
	echo "<br>";
	if($a==72 xor $b==49) {
		echo "Hello World";
	}
	echo "<br>";
	if($a==72 && $b==49) {
		echo "Hello World";
	}
	echo "<br>";
	if($a==72 || $b==49) {
		echo "Hello World";
	}
	echo "<br>";
	if($a!==72) {
		echo "Hello World";
	}
	echo "<br>";
	//String Operators
	$text1 = "Hi, ";
	$text2 = "Hello";
	echo $text1 . $text2;
	echo "<br>";
	$text1 .= $text2;
	echo $text1;
	echo "<br>";
	//Array Operators
	$o = array("a" => "Sun", "b" => "Mon", "c" => "Tue");
	$p = array("d" => "Wed", "e" => "Thurs", "f" => "Fri", "g" => "Sat");
	print_r($o + $p);
	echo "<br>";
	var_dump($o == $p);
	echo "<br>";
	var_dump($o === $p);
	echo "<br>";
	var_dump($o != $p);
	echo "<br>";
	var_dump($o <> $p);
	echo "<br>";
	var_dump($o !== $p);
	echo "<br>";
	//Conditional Assignment Operators
	echo $status = (empty($user)) ? "anonymous" : "logged in";
	echo ("<br>");
	$user = "SRP";
	echo $status = (empty($user)) ? "anonymous" : "logged in";
	echo ("<br>");
	echo $user = $_GET["user"] ?? "anonymous";
	echo ("<br>");
	echo $color = $color ?? "red";
	echo ("<br>");
	?>
	<?php
	$k = date("H");
	echo $k;
	echo "<br>";
	//If statement
	if ($k < "100") {
		echo "Good morning";
	}
	//Else-if statement
	elseif ($k > "100") {
		echo "Have a nice day";
	}
	//If-else statement
	else {
		echo "Sweet Dreams";
	}
	echo "<br>";
	?>
	<?php
	//Switch statements
	$mark = 90;
	switch ($mark) {
		case 100:
			echo "Outstanding";
			break;
		case 90:
			echo "Excellent";
			break;
		case 80:
			echo "Very Good";
			break;
		case 70:
			echo "Good";
			break;
		default:
			echo "Needs Improvement";
	}
	echo "<br>";
	?>
	<?php
	//while loop statements
	$x = 1;
	while($x <= 5) {
		echo "The number is : $x<br>";
		$x++;
	}
	echo  "<br>";
	$y = 10;
	while($y <= 100) {
		echo "The odd numbers divisible by 10 : $y<br>";
		$y+=20; 
	}
	echo "<br>";
	?>
	<?php
	//do while loop statements
	$x = 1;
	do {
		echo "The number is : $x<br>";
		$x++;
	}while ($x<=5);
	echo "<br>";
	$x = 10;
	do {
		echo "The number is : $x<br>";
		$x++;
	}while ($x<=5);
	echo "<br>";
	?>
	<?php
	//for loop statements
	for($x = 0; $x<=10; $x++) {
		echo "The number is : $x<br>";
	}
	echo "<br>";
	for($y = 8; $y<=37; $y+=4) {
		echo "The number is : $y<br>";
	}
	echo "<br>";
	?>
	<?php
	//for each loop statements
	$week = array("Sun", "Mon", "Tue", "Wed", "Thurs", "Fri", "Sat");
	foreach($week as $day) {
		echo "$day <br>";
	}
	echo "<br>";
	$state = array("Susma" => "Kerala", "Prathiksha" => "Bangalore", "Rakshana" => "Ooty");
	foreach($state as $x => $area) {
		echo "$x = $area<br>";
	}
	echo "<br>";
	?>
	<?php
	//break statement with for loop
	for ($x=0; $x<10; $x++) {
		if ($x==4) {
			break;
		}
		echo "The number is : $x<br>";
	}
	echo "<br>";
	//continue statement with for loop
	for ($x=0; $x<10; $x++) {
		if ($x==4) {
			continue;
		}
		echo "The number is : $x<br>";
	}
	echo "<br>";
	?>
	<?php
	//break statement with while loop	
	$y = 0;
	while ($y < 10) {
		if ($y == 4){
			break;
		}
		echo "The number is : $y<br>";
		$y++;
	}
	echo "<br>";
	//continue statement with while loop
	$y = 0;
	while ($y < 10) {
		if ($y == 4){
			continue;
		}
		echo "The number is : $y<br>";
		$y++;
	}
	echo "<br>";
	?>
</body>
</html>