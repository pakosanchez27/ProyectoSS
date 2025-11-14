<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acceso Denegado</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #0d1117;
            color: #e6edf3;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container {
            text-align: center;
            padding: 40px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
            animation: fadeIn 1s ease forwards;
        }

        h1 {
            font-size: 80px;
            color: #ff4c4c;
            animation: pulse 1.5s infinite;
        }

        h2 {
            margin-top: -10px;
            font-size: 28px;
            font-weight: 500;
            color: #e6edf3;
        }

        p {
            margin-top: 15px;
            font-size: 16px;
            opacity: 0.8;
        }

        .btn {
            margin-top: 25px;
            padding: 12px 30px;
            background: #ff4c4c;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #ff2f2f;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { text-shadow: 0 0 10px #ff4c4c; }
            50% { text-shadow: 0 0 25px #ff0000; }
            100% { text-shadow: 0 0 10px #ff4c4c; }
        }

        /* Animación del fondo */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 5px;
            height: 5px;
            background: #ff4c4c;
            border-radius: 50%;
            opacity: 0.7;
            animation: rise 6s linear infinite;
        }

        @keyframes rise {
            from { transform: translateY(100vh) scale(0.5); }
            to { transform: translateY(-10vh) scale(1); }
        }
    </style>
</head>
<body>

    <div class="particles" id="particles"></div>

    <div class="container">
        <h1>403</h1>
        <h2>Acceso Denegado</h2>
        <p>No tienes permisos para acceder a esta página o recurso.</p>
        <button class="btn" onclick="volver()">Volver</button>
    </div>

    <script>
        // Botón para regresar
        function volver() {
            window.history.back();
        }

        // Partículas animadas
        const cont = document.getElementById("particles");
        for (let i = 0; i < 40; i++) {
            let p = document.createElement("div");
            p.className = "particle";
            p.style.left = Math.random() * 100 + "vw";
            p.style.animationDuration = (Math.random() * 4 + 3) + "s";
            p.style.opacity = Math.random();
            cont.appendChild(p);
        }
    </script>

</body>
</html>
