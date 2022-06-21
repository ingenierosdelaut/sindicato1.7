<div>

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

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <form wire:submit.prevent="crearUser">
                <div class="container cont-user">
                    <div class="card">
                        <div class="card-header">
                            <h2>Formulario de registro</h2>
                            <p style="color: black">Para registrar un nuevo usuario se deben llenar todos los campos que
                                se muestran debajo.
                            </p>
                        </div>
                        <div class="card-body">
                            @include('livewire.admin.formulario')
                        </div>
                        <br>
                        <div class="card-footer">
                            <button class="float-right btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                            <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary"><i
                                    class="fa fa-home"></i>
                                Regresar</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>
