<!Doctype html>
<html>
    <head>
        <title>Datos</title>

    </head>
    <body>
<?php
$nombre=$_POST["usuario"];
$pass=$_POST["contrasena"];

$contenido="
nombre:$nombre
pass:$pass
";

$archivo=fopen("datos/$nombre.txt","w");
fwrite($archivo,$contenido);
?>
</body>
</html>