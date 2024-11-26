<?php

require 'db.php'; 
 
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
 

    $conn->query("DELETE FROM player_items WHERE item_id = $id");
 
    
    if ($conn->query("DELETE FROM items WHERE id = $id")) {
        echo "Ítem eliminado con éxito.";
        header("Location: list_items.php"); // Redirige a la lista de ítems
        exit();
    } else {
        echo "Error al eliminar el ítem: " . $conn->error;
    }
} else {
    echo "ID no especificado.";
}
?>
