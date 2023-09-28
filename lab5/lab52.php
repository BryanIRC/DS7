<?php
if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
    $nombreDirectorio = "Archivos/";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    $imageFileType = strtolower(pathinfo($nombreCompleto, PATHINFO_EXTENSION));
    $fileok = true;

    if ($_FILES['nombre_archivo_cliente']["size"] > 1000000) {
        echo "<br>Límite máximo para subir archivos: 1MB";
        $fileok = false;
    }
    if ($imageFileType != "jpg" && $imageFileType != "jpeg"  && $imageFileType != "gif" && $imageFileType != "png") {
        echo "<br>Solo se permiten los formatos: JPG, JPEG, GIF y PNG";
        $fileok = 0;
    }
    if ($fileok) {
        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombrearchivo = $idUnico . "-" . $nombrearchivo;
            echo "<br>Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
        }
        move_uploaded_file(
            $_FILES['nombre_archivo_cliente']['tmp_name'],
            $nombreDirectorio . $nombrearchivo
        );
        echo "<br>El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    } else
        echo "<br>No se ha podido subir el archivo";
}
