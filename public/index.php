<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generador de código QR</h1>
    <form action="generate.php" method="post">
        <p>
            <input type="text" name="data" placeholder="Contenido del QR">
        </p>
        <p>
            <input type="text" name="label" placeholder="Label">
        </p>
        <p>
            <input type="text" name="filename" placeholder="nombre archivo">
        </p>
        <p>
            <input type="submit" value = "Crear">
        </p>
    </form>
</body>
</html>