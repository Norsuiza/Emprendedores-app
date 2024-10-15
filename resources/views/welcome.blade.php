<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToolBelt AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('components.header')

<div class="container mt-5">
    <div style="display: flex; justify-content: center; margin-bottom: 1rem">
        <div>
            <h5>Acceso Rapido</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Generadores de Texto</h5>
                    <p class="card-text"> Estas herramientas pueden generar resúmenes, redactar artículos, crear
                        descripciones y más, basándose en el texto que se les proporciona.</p>
                    <a href="{{ url('/genText') }}" class="btn btn-primary">Ir a Herramienta 1</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div style="width: 50px">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Busqueda de Informacion</h5>
                    <p class="card-text"> Estas herramientas comprenden mejor el contexto de las consultas y pueden
                        ofrecer resultados más relevantes que los motores de búsqueda tradicionales</p>
                    <a href="{{ url('/srcInfo') }}" class="btn btn-primary">Ir a Herramienta 2</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Generacion de Imagenes</h5>
                    <p class="card-text">Estas herramientas crean imágenes automáticamente a partir de descripciones
                        textuales o patrones aprendidos, pueden producir arte y gráficos.</p>
                    <a href="{{ url('/genImg') }}" class="btn btn-primary">Ir a Herramienta 2</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Generadores de Iconos</h5>
                    <p class="card-text"> Estas herramientas crean iconos automáticamente a partir de descripciones
                        textuales o patrones predefinidos.</p>
                    <a href="{{ url('/genIcon') }}" class="btn btn-primary">Ir a Herramienta 1</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div style="width: 50px">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Lector de Textos</h5>
                    <p class="card-text">convierten texto escrito en voz hablada utilizando tecnologías de síntesis de
                        voz. Estas herramientas son útiles para personas con discapacidades visuales.</p>
                    <a href="{{ url('/readText') }}" class="btn btn-primary">Ir a Herramienta 2</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Otros</h5>
                    <p class="card-text">Herramientas que presentan multiples caracteristicas especializadas en un area
                        interante para los usuarios, puede que alguna te sorprenda a divierta!.</p>
                    <a href="{{ url('/others') }}" class="btn btn-primary">Ir a Herramienta 2</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="usageModal" tabindex="-1" aria-labelledby="usageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="usageModalLabel">Aviso de Responsabilidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Esta página es solamente para uso responsable y será usada como herramienta. Por favor, acepte para
                continuar.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Acepto</button>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var usageModal = new bootstrap.Modal(document.getElementById('usageModal'));
        usageModal.show();
    });
</script>
</body>
</html>
