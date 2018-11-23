<!DOCTYPE html>
<html lang=es>
<head>
	<title>
		
	</title>
</head>
<body>

<?php 
	

	$url = "https://www.filmaffinity.com/es/cat_new_th_es.html";
	$urlCorta = "https://www.filmaffinity.com";
	$contenido = file_get_contents($url);

	$doc = new DOMDocument();
	@$doc->loadHTML($contenido);

	$xpath = new DOMXpath($doc);

	$elements = $xpath->query("//div[@class='movie-title']/a");

	if ($elements != null) {

		foreach ($elements as $element) {
			/* Se obtiene la ruta relativa de una peli */
			$urlPeli = $element->getAttribute("href");
			/*Se concatena la url de filmaffinity con urlPeli*/
			$contenidoPeli = file_get_contents("$urlCorta$urlPeli");
			/* Se instancia un nuevo DOMDocument */
			$peliInfo = new DOMDocument();
			/* Se carga la pagina */
			@$peliInfo->loadHTML($contenidoPeli);
			/* Se instancia DOMXpath */
			$xpathPeli = new DOMXpath($peliInfo);
			/* Se realiza una consulta en XQuery */
			$info = $xpathPeli->query("//dl[@class='movie-info']/dd");
			/* Se recorre la informacion obtenida por cada pelicula */
			$tamInfo = count($info);

				echo "Titulo: " . $info[0]->nodeValue;
				echo "<br>";
				echo "Año: " . $info[1]->nodeValue;
				echo "<br>";
				echo "Pais: " . $info[4]->nodeValue;
				echo "<br>";
				echo "Sinopsis: " . $info[11]->nodeValue;
				echo "<br>";

			// Título, año, país, sinopsis e imagen
			echo $element->getAttribute("href");
			//echo $element->nodeValue;
			echo "<br>";
		}		

	}


	/*
	$listaNodos = $doc->getElementsByTagName("*");
	foreach ($listaNodos as $nodo) {
		$class =  $nodo->getAttribute("class");

		if ($class == "movie-poster") {
			$listaLink = $nodo->getElementsByTagName("a");
			foreach ($listaLink as $link) {
				echo $link->getAttribute("title") . "\n";
				echo "<br>";
			}
		}
	}
	*/
	

 ?>
</body>
</html>

