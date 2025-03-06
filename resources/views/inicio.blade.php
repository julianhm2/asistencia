<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia QR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: white;
        }
        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: auto;
        }
        .feature {
            padding: 50px 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    @include('parciales.menu')
    
    <section class="hero">
        <div class="container">
            <h1>Control de Asistencia Inteligente</h1>
            <p>Registra entradas y salidas con un escaneo de QR y autenticación segura con Arduino y Laravel.</p>
            <a href="{{ route('register') }}" class="btn btn-primary mt-3">Regístrate Ahora</a>
        </div>
    </section>

    <section class="feature bg-dark">
        <div class="container">
            <h2>¿Cómo funciona?</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h3>📌 Generación de QR</h3>
                    <p>Cada empleado recibe un código QR único generado en el sistema.</p>
                </div>
                <div class="col-md-4">
                    <h3>📷 Escaneo con Arduino</h3>
                    <p>Un lector QR conectado a Arduino captura los datos y los envía a Laravel.</p>
                </div>
                <div class="col-md-4">
                    <h3>🔒 Autenticación Segura</h3>
                    <p>Se envía un código de verificación al correo del empleado para validar el ingreso.</p>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
