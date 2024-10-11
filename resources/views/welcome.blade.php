<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToolBelt AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="logo1.png" class="card-img-top" alt="Logo 1">
                <div class="card-body">
                    <h5 class="card-title">Herramienta 1</h5>
                    <p class="card-text">Descripción breve de la Herramienta 1.</p>
                    <a href="https://link-a-la-herramienta1.com" class="btn btn-primary">Ir a Herramienta 1</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="logo2.png" class="card-img-top" alt="Logo 2">
                <div class="card-body">
                    <h5 class="card-title">Herramienta 2</h5>
                    <p class="card-text">Descripción breve de la Herramienta 2.</p>
                    <a href="https://link-a-la-herramienta2.com" class="btn btn-primary">Ir a Herramienta 2</a>
                </div>
            </div>
        </div>
        <!-- Repite según sea necesario -->
    </div>
</div>

@include('footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
