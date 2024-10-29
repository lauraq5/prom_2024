<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio San José de Guanenta - Graduación</title>

    <!-- Enlace a Google Fonts para fuente cursiva -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Estilos generales */
        body {
            font-family: 'Dancing Script', cursive; /* Fuente cursiva */
            font-size: 1.1em; /* Tamaño de fuente más grande */
            background-image: url('img/11-1.jpg');
            color: #1c1c1c; /* Color de texto más oscuro para mejor legibilidad */
            margin: 0; /* Cambiado a 0 para evitar margen extra */
            padding: 0; /* Cambiado a 0 para evitar padding extra */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Encabezado */
        header {
            width: 100%;
            background: linear-gradient(135deg, #e91e64, #ff4082);
            color: #fff;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        header h1 {
            font-size: 2.6em; /* Tamaño aumentado */
            margin: 0;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 0px 0px 8px rgba(255, 255, 255, 0.8);
        }

        /* Botón de inicio de sesión */
        .login-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 12px 22px;
            font-size: 1.1em;
            background: linear-gradient(135deg, #ff77a8, #ffccf9); /* Colores rosados claros */
            color: #fff;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
        }

        /* Barra de navegación */
        nav {
            width: 200px; /* Ancho fijo para la barra vertical */
            display: flex;
            flex-direction: column; /* Cambiado a columna para vertical */
            background: linear-gradient(135deg, #ff80ab, #f50057);
            padding: 20px;
            font-size: 1.1em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-top: 20px; /* Margen superior para separación */
            align-items: center; /* Centrar contenido en la barra */
        }

        nav img {
            width: 80%; /* Ajustar el tamaño de la imagen */
            margin-bottom: 20px; /* Espacio debajo de la imagen */
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 10px 0; /* Espacio entre enlaces */
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        nav a:hover {
            color: #ffccbc; /* Color de texto al pasar el ratón */
            transform: scale(1.1);
        }

        /* Contenido principal */
        .content {
            width: 100%;
            text-align: center;
            padding: 60px 20px;
            color: #1c1c1c;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 1.2em;
        }

        .content h2 {
            font-size: 2em;
            color: #ff4081;
            margin-bottom: 20px;
            text-shadow: 0px 0px 5px rgba(255, 20, 147, 0.7);
        }

        .content p {
            font-size: 1.2em;
            color: #4a4a4a;
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        /* Sección de fotos de graduación */
        .photos {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .photo-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(255, 20, 147, 0.3);
            overflow: hidden;
            text-align: center;
            border: 2px solid rgba(255, 20, 147, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .photo-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(255, 20, 147, 0.4);
        }

        /* Pie de página */
        footer {
            width: 100%;
            background: linear-gradient(135deg, #e91e63, #ff4081);
            color: #ffffff;
            text-align: center;
            padding: 25px;
            font-size: 1.1em;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body>

    <!-- Encabezado con botón de inicio de sesión -->
    <header>
        <h1>Colegio San José de Guanenta</h1>
        <button class="login-button" onclick="window.location.href='pagina_principal.php'">Iniciar Sesión</button>
    </header>

    <!-- Barra de navegación vertical -->
    <nav>
        <img src="ruta/a/tu-imagen.png" alt=""> <!-- Cambia la ruta de la imagen -->
        <a href="#">GALERÍA</a>
        <a href="#">CREADORES</a>
        <a href="#">DIRECTIVAS</a>
        <a href="#">DESTACADOS</a>
        <a href="#">MOSAICO</a>
        <a href="#">BANDA</a>
        <a href="#">INSTITUCIÓN</a>
    </nav>

    <!-- Contenido principal con fotos de graduación -->
    <div class="content">
        <h2>"“El futuro pertenece a quienes creen en la belleza de sus sueños.”"</h2>
        <p>El futuro pertenece a quienes trabajan por sus sueños hoy, sin miedo a los desafíos del mañana.</p>
        
        <div class="photos">
            <div class="photo-card">
                <img src="img/11-1.jpeg" alt="Foto de graduación Once Uno - Jornada Mañana" style="width:100%; border-bottom: 2px solid #ff4081;">
                <h3>Once Uno - Jornada Mañana</h3>
            </div>
            <div class="photo-card">
                <img src="img/11-2.jpeg" alt="Foto de graduación Once Dos - Jornada Mañana" style="width:100%; border-bottom: 2px solid #ff4081;">
                <h3>Once Dos - Jornada Mañana</h3>
            </div>
            <div class="photo-card">
                <img src="img/11-3.jpeg" alt="Foto de graduación Once Tres - Jornada Mañana" style="width:100%; border-bottom: 2px solid #ff4081;">
                <h3>Once Tres - Jornada Mañana</h3>
            </div>
            <div class="photo-card">
                <img src="img/11-4.jpeg" alt="Foto de graduación Once Cuatro - Jornada Mañana" style="width:100%; border-bottom: 2px solid #ff4081;">
                <h3>Once Cuatro - Jornada Mañana</h3>
            </div>
            <div class="photo-card">
                <img src="img/11-5.jpeg" alt="Foto de graduación Once Cinco - Jornada Mañana" style="width:100%; border-bottom: 2px solid #ff4081;">
                <h3>Once Cinco - Jornada Mañana</h3>
            </div>
        </div>
    </div
