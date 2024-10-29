<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celebración de los 200 años - Inicio de Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Dancing Script', cursive; /* Fuente cursiva */
            background-image: linear-gradient(to bottom right, #ffe0f0, #ffccf9);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            color: #333;
        }

        /* Estilos para el contenedor del formulario */
        #div_inicio_sesion {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4), 0 0 20px rgba(255, 105, 180, 0.5);
            width: 100%;
            max-width: 400px;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            animation: fadeIn 2s ease-in-out;
        }

        /* Animación de entrada para el contenedor */
        @keyframes fadeIn {
            0% { opacity: 0; transform: scale(0.9); }
            100% { opacity: 1; transform: scale(1); }
        }

        h1 {
            text-align: center;
            color: #ff66b2;
            font-size: 32px; /* Aumentado */
            margin-bottom: 20px;
            text-shadow: 0 0 10px rgba(255, 105, 180, 1);
            animation: glow 2s infinite alternate ease-in-out;
        }

        /* Animación de resplandor para el título */
        @keyframes glow {
            0% { text-shadow: 0 0 10px rgba(255, 105, 180, 0.8); }
            100% { text-shadow: 0 0 20px rgba(255, 105, 180, 1); }
        }

        /* Estilos para los campos del formulario */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px; /* Aumentado */
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 18px; /* Aumentado */
            background: rgba(255, 192, 203, 0.6); /* Color rosado claro */
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            outline: none;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            background: rgba(255, 192, 203, 0.8); /* Color rosado claro más intenso */
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(255, 20, 147, 0.5);
        }

        label {
            margin: 5px 0;
            font-size: 16px; /* Aumentado */
            color: #ff66b2;
            text-shadow: 0 0 5px rgba(255, 105, 180, 0.5);
        }

        /* Botones */
        button {
            width: 100%;
            padding: 12px; /* Aumentado */
            background: linear-gradient(90deg, #ff77a8, #ffccf9); /* Colores rosados claros */
            border: none;
            color: #333; /* Color de texto más oscuro para contraste */
            font-size: 18px; /* Aumentado */
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            animation: buttonGlow 1.5s infinite alternate ease-in-out;
            margin-top: 10px;
        }

        /* Animación de resplandor para el botón */
        @keyframes buttonGlow {
            0% { box-shadow: 0 0 10px rgba(255, 20, 147, 0.7); }
            100% { box-shadow: 0 0 20px rgba(255, 105, 180, 1); }
        }

        button:hover {
            background: linear-gradient(90deg, #ffccf9, #ff77a8); /* Colores en reversa al pasar el ratón */
        }

        /* Estilo para centrar el contenido */
        #div_inicio_sesion form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div id="div_inicio_sesion">
        <h1>Colegio Guanenta Promoción 2024</h1>
        <form action="modelo/loguear.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>

            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave" placeholder="Contraseña" required>

            <button type="submit">Ingresar</button>
        </form>
        
        <!-- Botón Volver -->
        <button onclick="window.location.href='index.php'">Volver</button>
    </div>
</body>
</html>


