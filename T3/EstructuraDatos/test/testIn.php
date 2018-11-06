<?php 

	function testIn($objeto)
	{

	echo "<br>";
	$objeto->introduce("Hola");
	$objeto->printHTML();
	
	echo "<br>";
	$objeto->introduce("que");
	$objeto->printHTML();
	
	echo "<br>";
	$objeto->introduce("tal");
	$objeto->printHTML();
	
	echo "<br>";
	$objeto->introduce("estas");
	$objeto->printHTML();
	
	echo "<br>";
	$objeto->introduce("?");
	$objeto->printHTML();
	echo "<br>";
	echo "<br>";

	echo "JSON";
	echo "<br>";
	$objeto->printJSON();
	

	echo "<br>";
	echo "<br>";
	echo "<br>";

}

 ?>