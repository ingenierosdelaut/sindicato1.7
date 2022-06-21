<div class="container contenedor">

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>
    <form class="form">
        <div class="row g-2">
            <div class="col">
                <input type="text" style="color: black" wire:model="usuario.nombre" placeholder="Nombre">
                @error('usuario.nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <input style="color: black" wire:model="usuario.apellido" placeholder="Apellido" type="text">
                @error('usuario.apellido')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div> <br>

        <div class="row">
            <div class="col-6">
                <input style="color: black" wire:model="usuario.email" placeholder="Ejemplo@hotmail.com" type="text"
                    placeholder="Correo: ejemplo@hotmail.com">
                @error('usuario.email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div> <br>

        <div class="row g-2">
            <div class="col">
                <input style="color: black" wire:model="password" type="password" placeholder="Contraseña">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <input style="color: black" wire:model="confirm_password" type="password"
                    placeholder="Confirmar Contraseña">
                @error('confirm_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div> <br>

        <div class="row g-2">
            <div class="col">
                {{-- <input style="color: black" wire:model="usuario.departamento" type="text" placeholder="Departamento"
                    > --}}
                <select style="color: black" class="relieve-options" wire:model="usuario.departamento"
                    name="departamento">
                    <option>Departamento</option>
                    <option value="Tecnologias de la Información">Tecnologias de la infomación</option>
                    <option value="Operaciones Comerciales">Operaciones comerciales internacionales</option>
                    <option value="Mecatrónica">Mecatrónica</option>
                    <option value="Desarrollo de negocios">Desarrollo de negocios</option>
                </select>
                @error('usuario.departamento')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                {{-- <input style="color: black" wire:model="usuario.puesto" type="text" placeholder="Puesto"
                    > --}}
                <select style="color: black" class="relieve-options" wire:model="usuario.puesto" name="puesto"
                    aria-placeholder="Elegir">
                    <option>Puesto</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Docente">Docente</option>
                </select>
                @error('usuario.puesto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                {{-- <select type="button"  name="puesto" placeholder="Elegir">
                        <option value="">--Seleccionar la opcion--</option>
                        <option value="administrativo">Administrativo</option>
                        <option value="docente">Docente</option>
                    </select> --}}


            </div>
        </div> <br>

        <div class="row g-3">
            <div class="col">
                <input style="color: black" wire:model="usuario.telefono" type="text"
                    placeholder="Teléfono, Ejemplo: 6531506589">
                @error('usuario.telefono')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <input wire:model="usuario.curp" type="text" style="color: black; text-transform:uppercase;"
                    placeholder=" CURP, Ejemplo: MAAA991217HSRRML06">
                @error('usuario.curp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <input wire:model="usuario.rfc" type="text" style="color: black; text-transform:uppercase;"
                    placeholder="RFC, Ejemplo: MAAA991217HSRRML06">
                @error('usuario.rfc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div> <br>

        <div class="row g-3">
            <div class="col">
                <input wire:model="usuario.ine" type="text" style="color: black; text-transform:uppercase;"
                    placeholder="Clave de Lector">
                @error('usuario.ine')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <input style="color: black" wire:model="usuario.fecha_ingreso" type="date" class="relieve-options"
                    placeholder=" Fecha de Ingreso Ejemplo: 05/05/2020">
                @error('usuario.fecha_ingreso')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <input style="color: black" wire:model="usuario.fecha_afiliacion" type="date" class="relieve-options"
                    placeholder=" Fecha de Afiliación, Ejemplo: 20/05/2020">
                @error('usuario.fecha_afiliacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </form>



</div>
