<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente</title>
    <style>
        body { font-family: Arial; background: #e8f5e8; padding: 20px; }
        form { background: white; padding: 25px; border-radius: 8px; max-width: 600px; }
        input, select, textarea { width: 100%; padding: 8px; margin: 5px 0 15px 0; box-sizing: border-box; }
        .botones input { width: auto; padding: 10px 20px; margin-right: 10px; cursor: pointer; }
        .opciones input { width: auto; }
    </style>
</head>
<body>
    <h2>Registrar Nuevo Cliente</h2>
    <form action="guardar.php" method="POST">
        <input type="hidden" name="tabla" value="cliente">
        
        <!-- Punto 38: Cuadro de texto -->
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>
        
        <label>Teléfono:</label>
        <input type="text" name="telefono">
        
        <label>Email:</label>
        <input type="email" name="email">
        
        <!-- Punto 36: Cuadro de texto amplio -->
        <label>Dirección:</label>
        <textarea name="direccion" rows="2"></textarea>
        
        <!-- Punto 33: Lista desplegable -->
        <label>Ciudad:</label>
        <select name="ciudad">
            <option value="">Seleccione</option>
            <option value="Tijuana">Tijuana</option>
            <option value="Mexicali">Mexicali</option>
            <option value="Ensenada">Ensenada</option>
        </select>
        
        <label>Estado:</label>
        <select name="estado">
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
        </select>
        
        <label>Edad:</label>
        <input type="number" name="edad">
        
        <!-- Punto 32: Botón de opción / Radio -->
        <label>Género:</label><br>
        <div class="opciones">
            <input type="radio" name="genero" value="Masculino" required> Masculino
            <input type="radio" name="genero" value="Femenino" required> Femenino
        </div><br>
        
        <!-- Punto 31: Casilla de verificación -->
        <div class="opciones">
            <input type="checkbox" name="acepto" value="si" required> Acepto términos y condiciones
        </div><br>
        
        <!-- Puntos 21, 34, 39: Botones -->
        <div class="botones">
            <input type="submit" name="guardar" value="Guardar Cliente">
            <input type="reset" value="Limpiar">
            <a href="principal.php"><input type="button" value="Regresar"></a>
        </div>
    </form>
</body>
</html>