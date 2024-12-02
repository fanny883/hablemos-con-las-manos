<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE PARTE DE NUESTRA TRIPULACIÓN</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('img/icon.png'); /* Imagen de fondo */
            background-size: cover;
            background-position: center;
        }

        .contenedor-formulario {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
            padding: 20px;
            width: 100%;
            max-width: 400px; /* Reducir el ancho máximo del formulario */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            font-family: 'Montserrat', sans-serif;
            color: #2c3e50;
            margin: 0;
            text-align: center;
            font-size: 1.5rem; /* Ajustar tamaño del título */
            margin-bottom: 10px;
        }

        .imagen-header {
            width: 120px; /* Reducir el tamaño de la imagen */
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .contenedor-inputs {
            display: grid;
            gap: 10px;
        }

        input[type="text"], input[type="password"], input[type="email"], input[type="tel"] {
            padding: 8px; /* Reducir el padding de los inputs */
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px; /* Reducir tamaño de la fuente */
            width: 100%;
            background-color: #f9f9f9;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="tel"]:focus {
            border-color: #2980b9;
            outline: none;
        }

        .btn-enviar {
            background-color: #2980b9;
            color: #fff;
            border: none;
            padding: 10px; /* Reducir el padding del botón */
            font-size: 14px; /* Reducir tamaño del texto en el botón */
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 15px;
        }

        .btn-enviar:hover {
            background-color: #1e6a94;
        }

        .mensaje {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        .mensaje-exito {
            background-color: #a3e4d7;
            color: #008000;
        }

        .mensaje-error {
            background-color: #f8d7da;
            color: #721c24;
        }

        .form_link {
            text-align: center;
            margin-top: 15px; /* Reducir espacio entre enlace y formulario */
        }

        .form_link a {
            color: #2980b9;
            text-decoration: none;
            font-size: 0.9rem; /* Reducir tamaño del enlace */
        }

        .form_link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="contenedor-formulario">
        <!-- Imagen de encabezado -->
        <img src="img/ic.png" alt="Logo o imagen de la página" class="imagen-header">
        
        <h2>Formulario de Registro</h2>
        <form onsubmit="return validar(this);" method="POST" action="usuario.php">
            <div class="contenedor-inputs">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombres" maxlength="30" class="input-50" required><br>

                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" maxlength="50" class="input-50" required><br>

                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" class="input-50" required><br>

                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" maxlength="10" class="input-50" required><br>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" maxlength="10" class="input-50" required><br>
            </div>

            <input type="submit" value="Enviar" class="btn-enviar">
        </form>

       

        <div id="mensaje" class="mensaje">
            <?php
            if (!empty($mensaje)) {
                echo "<p>$mensaje</p>";
            }
            ?>
        </div>
    </div>

    <script>
        // Función para validar el formulario
        function validar(form) {
            var nombre = form.nombres.value.trim();
            var apellidos = form.apellidos.value.trim();
            var correo = form.correo.value.trim();
            var contraseña = form.contraseña.value.trim();
            var telefono = form.telefono.value.trim();

            // Validación básica
            if (nombre === "" || apellidos === "" || correo === "" || contraseña === "" || telefono === "") {
                mostrarMensaje("Todos los campos son obligatorios", "error");
                return false;
            }
            if (nombre.length > 30) {
                mostrarMensaje("El nombre es muy largo (máximo 30 caracteres)", "error");
                return false;
            }
            if (apellidos.length > 50) {
                mostrarMensaje("Los apellidos son muy largos (máximo 50 caracteres)", "error");
                return false;
            }
            if (!/\w+@\w+\.\w+/.test(correo)) {
                mostrarMensaje("El correo no es válido", "error");
                return false;
            }
            if (contraseña.length > 10) {
                mostrarMensaje("La contraseña debe contener máximo 10 caracteres", "error");
                return false;
            }
            if (telefono.length > 10 || isNaN(telefono)) {
                mostrarMensaje("El teléfono debe contener máximo 10 números", "error");
                return false;
            }

            return true;
        }

        // Función para mostrar mensajes de error o éxito
        function mostrarMensaje(mensaje, tipo) {
            var contenedorMensaje = document.getElementById("mensaje");
            contenedorMensaje.textContent = mensaje;
            contenedorMensaje.className = "mensaje " + tipo;
        }
    </script>
</body>
</html>
