<?php

abstract class Person
{
	abstract public function greet();
}
 
?>
 
<?php
//...
$people = [
	new English(),
	new German(),
	new French()
];

greeting($people);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>