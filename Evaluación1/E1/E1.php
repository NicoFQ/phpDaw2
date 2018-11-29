<?php 
	spl_autoload_register(function ($class) {
    $classPath = "./";
    require("$classPath${class}.php");
	});
	$p1 = new Equipo("Barcelona", "Barcelona");
	$p2 = new Equipo("Real Madrid", "Madrid");
	$p3 = new Equipo("Sevilla", "Sevilla");
	$p4 = new Equipo("Atletico de Madrid", "Madrid");
	$p5 = new Equipo("Atletico de Bilbao", "Bilbao");
	$p6 = new Equipo("Valencia", "Valencia");

/*
	$partido1 = new Partido($p1, $p2);
	$partido2 = new Partido($p3, $p4);
	$partido3 = new Partido($p5, $p6);
*/


	$liga =  new Liga();
	$liga->addEquipo($p1);
	$liga->addEquipo($p2);
	$liga->addEquipo($p3);
	$liga->addEquipo($p4);
	$liga->addEquipo($p5);
	$liga->addEquipo($p6);
	$liga->sorteaLiga();
	$liga->generaTablaPartidos();

 ?>