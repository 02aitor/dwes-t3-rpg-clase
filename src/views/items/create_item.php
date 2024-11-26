
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear Ítem</title>
</head>
<body>
<h1>Crear Nuevo Ítem</h1>
<form action="save_item.php" method="POST" enctype="multipart/form-data">
<label for="name">Nombre del Ítem:</label>
<input type="text" id="name" name="name" required>
<br>
 
        <label for="description">Descripción:</label>
<textarea id="description" name="description" required></textarea>
<br>
 
        <label for="type">Tipo:</label>
<select id="type" name="type" required>
<option value="weapon">Arma</option>
<option value="armor">Armadura</option>
<option value="potion">Poción</option>
<option value="misc">Misceláneo</option>
</select>
<br>
 
        <label for="effect">Efecto:</label>
<input type="number" id="effect" name="effect" required>
<br>
 
        <label for="img">Imagen:</label>
<input type="file" id="img" name="img">
<br>
 
        <button type="submit">Guardar Ítem</button>
</form>
</body>
</html>