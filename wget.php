<?php
/* 
	DESARROLLO Y PROGRAMACIÓN
	PROGRAMANDOWEB.NET
	LCDO. JORGE MENDEZ
	info@programandoweb.net
	programandoweb.net
	WS: +573045382899
*/

	function wget($url){
		if($url){
			$cmd = "wget -nd -p --convert-links -P downloads \"$url\" ";
			exec($cmd);
		}
	}

	/*
		$url =	dirección donde se encuentra el archivo a copiar
		ejemplos:
		$url =	'http://example.com/archivo.zip'; 
		$url =	'http://example.com/imagen.jpg'; 

	*/
	wget($url);
?>