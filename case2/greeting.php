<?php
//...
function greeting($people)
{
	foreach ($people as $person) {
		echo $person->greet() . '<br>';
	}
}