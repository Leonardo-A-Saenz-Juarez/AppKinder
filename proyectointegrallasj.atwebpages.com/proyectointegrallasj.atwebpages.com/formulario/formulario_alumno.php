<?php
include 'conexion2.php';

// Cargar usuarios de la base de datos
try {
    $stmt = $conn->prepare("SELECT id_gpo, grupo_gpo FROM grupo ORDER BY id_gpo");
    $stmt->execute();
    $grupos = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <h2>Registrar Alumno</h2>

    <form action="guardar_alumno.php" method="post">
        
        <label>Seleccionar Grupo:</label><br>
        <select name="id_gpo" required>
            <option value="">-- Selecciona un Grupo --</option>
            <?php foreach ($grupos as $grupo): ?>
                <option value="<?php echo htmlspecialchars($grupo['id_gpo']); ?>">
                    ID: <?php echo htmlspecialchars($grupo['id_gpo']); ?> - 
                    <?php echo htmlspecialchars($grupo['grupo_gpo']); ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre_alu" required><br><br>

        <label>Apellidos:</label><br>
        <input type="text" name="apellidos_alu" required><br><br>

        <button type="submit">guardar</button>
    </form>
    
</body>
</html>