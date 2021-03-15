<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema web</title>
</head>
<body>
    <form action="<?= base_url('Registro/actualizarDatos') ?>">
    
    <h1>Actualiza tus datos</h1>

    <input type="text" name="txtnombre" placeholder="Nombre"><br><br>
    <input type="text" name="txtappaterno" placeholder="Apellido Paterno"><br><br>
    <input type="text" name="txtapmaterno" placeholder="Apellido Materno"><br><br>
    <input type="text" name="txtcorreo" placeholder="Correo"><br><br>
    <input type="submit" value="Actualizar"><br>

    </form>


</body>
</html>