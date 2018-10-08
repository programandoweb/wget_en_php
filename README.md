# wget_en_php
Copiar un archivo remoto por medio de PHP

Sencillo Script en PHP para copiar un archivo remoto hacia nuestro actual servidor, una ventaja cuando quieres migrar un sitio Web sin tener que descargar a tu pc el zip para luego subirlo al nuevo hosting.

Adicional: Para quienes no tienen conocimiento de la migración de una página Web de un servidor a otro en CPANEL, sigue estos simples pasos.

1) Ingresa al Cpanel del servidor desde donde vamos a hacer la migración.

2) Ubica el link "Administrador de archivos", una vez abierta la nueva ventana, ubica los archivos que deseas migrar, seleccionalos y busca en la barra superior el botón Comprimir y le colocamo como nombre al archivo zip transferencia.zip

3) Un vez finalizado el paso anterior, ingreso al Cpanel del nuevo hosting, nuevamente ubicamos "Administrador de archivos", al abrir la ventana nos posicionamos en el directorio raíz, en este directorio es donde vamos a subir nuestro archivo wget.php.

4) Una vez subido, editamos nuestro archivo wget.php dentro del "Administrador de archivos" y buscamos la línea wget($url); al final del archivo, y reemplazamos la variable $url por la url donde se encuentra nuestro archivo, en este caso de emeplo (Colocar comillas): "http://ejemplo.com/transferencia.zip"

5) por último y para finalizar, ingresarmos en nuestro navegador web, digitamos: http://ejemplo-nuevo-server.com/wget.php, dependiendo del tamaño del archivo remoto, pudiera tardar unos minutos mientras se realiza la copia. Ya al termino de la copia, nos vamos nuevamente al  "Administrador de archivos", buscamos el archivo "transferencia.zip", lo seleccionamos y buscamos en la barra superior el botón descomprimir, esperamos un poco y parammmmm listo, ya tienes todos tus archivos del servidor remoto en tu nuevo server sin tener que descargar y volver a subir durante horas.
