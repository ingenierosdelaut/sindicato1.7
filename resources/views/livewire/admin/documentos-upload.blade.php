<div>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .container {
                max-width: 500px;
            }

            dl,
            ol,
            ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu"></div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <img src="{{ asset('static/images/sututslrc.png') }}" width="150" height="150" alt="">
                    <h3><span style="color:#177c67">SUTUT</span><span style="color:grey">SLRC</span></h3>

                </div>
            </div>
            <ul class="list-unstyled components mb-5">

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
                    <a href="{{ route('admin.documento-create') }}"><span class="fa fa-tags mr-3"></span> Documentos</a>
                </li>
                <li>
                    <div style="margin-top: 100px;">
                        @livewire('iniciar-sesion.logout')
                    </div>
                </li>
            </ul>

        </nav>

    <body>
        <div class="container mt-5">
            <form action="{{ route('fileUpload') }}" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-5">Subir Documentos</h3>
                @csrf
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="formFile" class="form-label">Selecciona el documeto a subir</label>
                    <input name="file" class="form-control" type="file" id="formFile">
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4 text-center">
                    Subir Documento
                </button>
            </form>
        </div>
    </body>
</div>
