    @csrf
    <div>
        <input type="hidden" name="col_cod_desc" value="{{ "1" }}">
        <input type="hidden" class="form-control" name="col_user" value="{{ Str::limit(Auth::user()->name, 14) }}">
    </div>
    <div class="from-group shadow mb-3" style="border-style: solid; border-width; .3rem;">
        <label for="col_descripcion">
            Nombre del Color
        </label>
        <input class="form-control" id="col_descripcion" type="text" name="col_descripcion" value="{{ old("col_descripcion", $color->col_descripcion) }}">
        <label for="col_estado">
            Estado del Registo
        </label>
        <input class="form-control mb-1" id="col_estado" type="text" name="col_estado" value="{{ old("col_estado", $color->col_estado) }}">
    </div>
    <button class="btn-primary btn-lg">
        {{ $btnText }}
    </button>
    <a class="btn-warning btn-lg" href="{{ route("colores.index") }}">
        Cancelar
    </a>
