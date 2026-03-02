<?php
include 'conexion2.php';

// Cargar usuarios de la base de datos
try {
    $stmt = $conn->prepare("SELECT id_usu, usuario_usu, rol FROM usuarios ORDER BY usuario_usu");
    $stmt->execute();
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al cargar usuarios: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Personal</title>
</head>
<body>
    <h2>Registrar Maestra</h2>

    <form action="guardar_personal.php" method="post">
        
        <label>Seleccionar Usuario:</label><br>
        <select name="id_usu" required>
            <option value="">-- Selecciona un usuario --</option>
            <?php foreach ($usuarios as $usuario): ?>
                <option value="<?php echo htmlspecialchars($usuario['id_usu']); ?>">
                    ID: <?php echo htmlspecialchars($usuario['id_usu']); ?> - 
                    <?php echo htmlspecialchars($usuario['usuario_usu']); ?> 
                    (<?php echo htmlspecialchars($usuario['rol']); ?>)
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="maestra" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" required><br><br>

        <label>Celular:</label><br>
        <input type="tel" name="cel" required><br><br>

        <button type="submit">guardar</button>
    </form>
    
</body>
</html>