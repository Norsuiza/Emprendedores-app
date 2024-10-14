<!-- resources/views/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">ToolBelt AI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/catalogo1') }}">Catálogo 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/catalogo2') }}">Catálogo 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/catalogo3') }}">Catálogo 3</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
