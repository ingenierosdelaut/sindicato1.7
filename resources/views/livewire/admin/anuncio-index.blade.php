<div wire:init="cargando">

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu"></div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <img src="{{ asset('static/images/sututslrc.png') }}" width="150" height="150"
                        alt="">
                    <h3><span style="color:#177c67">SUTUT</span><span style="color:grey">SLRC</span></h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li>
                    <input wire:model="search" class="form-control search" placeholder="Buscar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="active">
                    <a href="{{ route('admin.view') }}"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="{{ route('admin.usuarios') }}"><span class="fa fa-users mr-3 notif"></span>Usuarios</a>
                </li>
                <li>
                    <a href="{{ route('admin.anuncios') }}"><span class="fa fa-newspaper mr-3"></span> Anuncios</a>
                </li>
                <li>
                    <a href="{{ route('admin.solicitudes') }}"><span class="fa fa-tags mr-3"></span> Solicitudes</a>
                </li>
                <li>
                    <div style="margin-top: 170px;">
                        @livewire('iniciar-sesion.logout')
                    </div>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container cont-anuncio-index">
                <div class="row">
                    <div class="col mb-1">
                        <div class="float-left">
                            <a href="{{ route('admin.anuncio.pdf') }}" type="button" class="btn-sm btn-dark"><i
                                    class="fa fa-file-pdf"></i> Generar
                                reporte</a>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="float-right">
                            <a href="{{ route('admin.anuncio-create') }}" type="button" class="btn-sm btn-success"><i
                                    class="fa fa-plus-square"></i> Crear nuevo anuncio</a>
                        </div>
                    </div>

                </div>

                @if (count((array) $anuncios))
                    <div class="row">
                        <div class="col text-center">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <td scope="col">TITULO</td>
                                        <td scope="col">ESPECIFICACIONES</td>
                                        <td scope="col">PUBLICADO POR</td>
                                        <td scope="col">DIA QUE SE PUBLICO</td>
                                        <td scope="col">ACCIONES</td>
                                    </tr>
                                </thead>
                                @foreach ($anuncios as $anuncio)
                                    <tbody>
                                        <tr>
                                            <td>{{ $anuncio->titulo }}</td>
                                            <td>{{ $anuncio->contenido }}</td>
                                            <td>{{ $anuncio->nombre }} {{ $anuncio->apellido }}</td>
                                            <td>{{ $anuncio->created_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.anuncio-delete', $anuncio) }}"
                                                    type="button" title="Eliminar anuncio" class="btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                                <a href="{{ route('admin.anuncio-edit', $anuncio) }}"
                                                    title="Editar anuncio" type="button" class="btn-sm btn-info"><i
                                                        class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        @else
                            <table class="table table-striped">
                                <thead class="table-dark" style="text-aling-center">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">TITULO</th>
                                        <th scope="col">ESPECIFICACIONES</th>
                                        <th scope="col">PUBLICADO POR</th>
                                        <th scope="col">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <th>No hay resultados</th>
                                    <th>No hay resultados</th>
                                    <th>No hay resultados</th>
                                    <th>No hay resultados</th>
                                    <th>No hay resultados</th>
                                </tbody>
                @endif
                {{ $cargado == true ? $anuncios->links() : null }}
            </div>
        </div>
    </div>
</div>
</div>


</div>
