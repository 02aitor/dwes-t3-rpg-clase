<?php
// Archivo para editar un ítem
require 'db.php'; // Asegúrate de configurar correctamente la conexión
 
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $result = $conn->query("SELECT * FROM items WHERE id = $id");
 
    if ($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Ítem</title>
</head>
<body>
<h1>Editar Ítem</h1>
<form action="update_item.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
 
                <label for="name">Nombre del Ítem:</label>
<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
<br>
 
                <label for="description">Descripción:</label>
<textarea id="description" name="description" required><?php echo htmlspecialchars($row['description']); ?></textarea>
<br>
 
                <label for="type">Tipo:</label>
<select id="type" name="type" required>
<option value="weapon" <?php if ($row['type'] === 'weapon') echo 'selected'; ?>>Arma</option>
<option value="armor" <?php if ($row['type'] === 'armor') echo 'selected'; ?>>Armadura</option>
<option value="potion" <?php if ($row['type'] === 'potion') echo 'selected'; ?>>Poción</option>
<option value="misc" <?php if ($row['type'] === 'misc') echo 'selected'; ?>>Misceláneo</option>
</select>
<br>
 
                <label for="effect">Efecto:</label>
<input type="number" id="effect" name="effect" value="<?php echo htmlspecialchars($row['effect']); ?>" required>
<br>
 
                <label for="img">Imagen:</label>
<input type="file" id="img" name="img">
<br>
 
                <button type="submit">Actualizar Ítem</button>
</form>
</body>
</html>
<?php
    } else {
        echo "Ítem no encontrado.";
    }
} else {
    echo "ID no especificado.";
}
?>