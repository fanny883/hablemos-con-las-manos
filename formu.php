<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HABLEMOS CON LAS MANOS</title>
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
            background-image: url('img/icon.png'); /* Aquí se coloca la imagen de fondo */
            background-size: cover;
            background-position: center;
        }

        .contenedor {
            background: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            font-family: 'Montserrat', sans-serif;
            color: #2c3e50;
            margin: 0;
        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 1.5rem;
            text-align: center;
            color: #2980b9;
            margin-bottom: 30px;
        }

        .contenedor-inputs {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input[type="text"], input[type="password"] {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            background-color: #f9f9f9;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #2980b9;
            outline: none;
        }

        .btn-enviar {
            background-color: #2980b9;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-enviar:hover {
            background-color: #1e6a94;
        }

        .form_link {
            text-align: center;
            margin-top: 20px;
        }

        .form_link a {
            color: #2980b9;
            text-decoration: none;
            font-size: 1rem;
        }

        .form_link a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: #e74c3c;
            text-align: center;
            margin-top: 15px;
        }

        /* Agregar un estilo de imagen en el encabezado */
        .imagen-header {
            width: 150px; /* Ajustar el tamaño de la imagen */
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px; /* Espacio debajo de la imagen */
            display: block; /* Centrado de la imagen */
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>
<body>

    <div class="contenedor">
        <!-- Imagen en el encabezado -->
        <img src="img/ic.png" alt="Logo o imagen de la página" class="imagen-header">
        
        <h1>HABLANDO CON LAS MANOS</h1>
        <h2>Bienvenidos</h2>

        <div class="contenedor-formulario">
            <form action="for.php" method="post" class="form-register">
                <div class="contenedor-inputs">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                    <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required>
                    <input type="submit" value="Iniciar sesión" class="btn-enviar">
                </div>
            </form>

            <div class="form_link">
                <p>¿No tienes una cuenta? <a href="reg.php">Regístrate aquí</a></p>
            </div>

            <?php if (!empty($err)) { ?>
                <div class="error-message">
                    <p><?php echo $err; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>
