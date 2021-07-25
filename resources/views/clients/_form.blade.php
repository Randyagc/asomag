    @csrf
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <input class="form-control" type="hidden" name="cli_cod_desc" value={{ "Mix campos" }}>
        <input class="form-control" type="hidden" name="cli_descripcion" value="{{ "Descripcion" }}">
        <input class="form-control" type="hidden" name="cli_user" value="{{ Auth::user()->id }}">
        <div class="form-group col-md-6">
            <label for="cli_nombre">
                <u>Nombre del Cliente</u>
            </label>
            <input class="form-control" id="cli_nombre" type="text" placeholder="Ej: Carlos Alberto .." name="cli_nombre" value="{{ old('cli_nombre', $cliente->cli_nombre) }}">
        </div>
        <div class="form group col-md-6">
            <label for="cli_apellido">
                <u>Apellido del Cliente</u>
            </label>
            <input class="form-control" id="cli_apellido" type="text" placeholder="Ej: Santos Vergel" name="cli_apellido" value="{{ old('cli_apellido', $cliente->cli_apellido) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_tipo_id">
                <u>Tipo de Identificador</u>
            </label>
            <select name="cli_tipo_id" class="form-control border-0 bg-yellow shadow-sm">
                <option> Seleccione el tipo de Identificador </option>
                @foreach($tiposid as $tipoid)
                    <option style="font-color: #34de;" value="{{$tipoid->id}}">{{ $tipoid->id }}.{{ $tipoid->tid_descripcion }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="cli_num_id">
                <u>Identificador Número</u>
            </label>
            <input class="form-control" id="cli_num_id" type="text" name="cli_num_id" value="{{ old('cli_num_id', $cliente->cli_num_id) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_tipo_cliente">
                <u>Tipo Cliente</u>
            </label>
            <input class="form-control" id="cli_tipo_cliente" type="text" name="cli_tipo_cliente" value="{{ old('cli_tipo_cliente', $cliente->cli_tipo_cliente) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_direccion">
                <u>Dirección Domiciliaria</u>
            </label>
            <input class="form-control" id="cli_direccion" type="text" name="cli_direccion" value="{{ old('cli_direccion', $cliente->cli_direccion) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_tel_conv">
                <u>Número de Teléfono Convencional</u>
            </label>
            <input class="form-control" id="cli_tel_conv" type="text" name="cli_tel_conv" value="{{ old('cli_tel_conv', $cliente->cli_tel_conv) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_tel_cel">
                <u>Número de Teléfono Celular</u>
            </label>
            <input class="form-control" id="cli_tel_cel" type="text" name="cli_tel_cel" value="{{ old('cli_tel_cel', $cliente->cli_tel_cel) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_correo_electronico">
                <u>Correo Electrónico</u>
            </label>
            <input class="form-control" id="cli_correo_electronico" type="text" name="cli_correo_electronico" value="{{ old('cli_correo_electronico', $cliente->cli_correo_electronico) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_nom_contacto">
                <u>Nombre del Contacto - Empresa</u>
            </label>
            <input class="form-control" id="cli_nom_contacto" type="text" name="cli_nom_contacto" value="{{ old('cli_nom_contacto', $cliente->cli_nom_contacto) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_actividad">
                <u>Actividad del Cliente</u>
            </label>
            <input class="form-control" id="cli_actividad" type="text" name="cli_actividad" value="{{ old('cli_actividad', $cliente->cli_actividad) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_profesion">
                <u>Profesión del Cliente</u>
            </label>
            <input class="form-control" id="cli_profesion" type="text" name="cli_profesion" value="{{ old('cli_profesion', $cliente->cli_profesion) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_pais">
                <u>Pais Residencia Cliente</u>
            </label>
            <input class="form-control" id="cli_pais" type="text" name="cli_pais" value="{{ old('cli_pais', $cliente->cli_pais) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_provincia">
                <u>Provincia Residencia Cliente</u>
            </label>
            <input class="form-control" id="cli_provincia" type="text" name="cli_provincia" value="{{ old('cli_provincia', $cliente->cli_provincia) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_ciudad">
                <u>Ciudad Residencia Cliente</u>
            </label>
            <input class="form-control" id="cli_ciudad" type="text" name="cli_ciudad" value="{{ old('cli_ciudad', $cliente->cli_ciudad) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_canton">
                <u>Canton Residencia Cliente</u>
            </label>
            <input class="form-control" id="cli_canton" type="text" name="cli_canton" value="{{ old('cli_canton', $cliente->cli_canton) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_pagina_web">
                <u>Página Web Cliente</u>
            </label>
            <input class="form-control" id="cli_pagina_web" type="text" name="cli_pagina_web" value="{{ old('cli_pagina_web', $cliente->cli_pagina_web) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_agro">
                <u>Pertenece Agrocalidad</u>
            </label>
            <input class="form-control" id="cli_agro" type="text" name="cli_agro" value="{{ old('cli_agro', $cliente->cli_agro) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_seguimiento">
                <u>Hacer Control Cliente</u>
            </label>
            <input class="form-control" id="cli_seguimiento" type="text" name="cli_seguimiento" value="{{ old('cli_seguimiento', $cliente->cli_seguimiento) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_observaciones_seguimiento">
                <u>Observaciones al Control Cliente</u>
            </label>
            <input class="form-control" id="cli_observaciones_seguimiento" type="text" name="cli_observaciones_seguimiento" value="{{ old('cli_observaciones_seguimiento', $cliente->cli_observaciones_seguimiento) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_observaciones">
                <u>Observaciones Generales Cliente</u>
            </label>
            <input class="form-control" id="cli_observaciones" type="text" name="cli_observaciones" value="{{ old('cli_observaciones', $cliente->cli_observaciones) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_porcentaje_factura">
                <u>Porcentaje a Facturación</u>
            </label>
            <input class="form-control" id="cli_porcentaje_factura" type="text" name="cli_porcentaje_factura" value="{{ old('cli_porcentaje_factura', $cliente->cli_porcentaje_factura) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_fecha_creacion">
                <u>Fecha Nacimiento / Creación Empresa</u>
            </label>
            <input class="form-control" id="cli_fecha_creacion" type="text" name="cli_fecha_creacion" value="{{ old('cli_fecha_creacion', $cliente->cli_fecha_creacion) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="cli_fecha_ingreso">
                <u>Fecha Ingreso Asociación</u>
            </label>
            <input class="form-control" id="cli_fecha_ingreso" type="text" name="cli_fecha_ingreso" value="{{ old('cli_fecha_ingreso', $cliente->cli_fecha_ingreso) }}">
        </div>
    </div>
    <div class="row shadow" style="border-style: solid; border-width; .3rem;">
        <div class="form-group col-md-6">
            <label for="cli_estado">
                <u>Estado Cliente</u>
            </label>
            <input class="form-control" id="cli_estado" type="text" name="cli_estado" value="{{ old('cli_estado', $cliente->cli_estado) }}">
        </div>
        <div class="form-group col-md-6 mt-4">
            <button class="btn-primary btn-lg">
                {{ $btnText }}
            </button>
            <a class="btn-warning btn-lg" href="{{ route('clients.index') }}">
                Cancelar
            </a>
        </div>
    </div>

