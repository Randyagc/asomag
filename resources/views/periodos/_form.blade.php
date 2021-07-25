    @csrf
    <div>
        <input type="hidden" name="per_cod_desc" value="{{ "1" }}">
        <input type="hidden" class="form-control" name="per_user" value="{{ Str::limit(Auth::user()->name, 14) }}">
    </div>
    <div class="from-group shadow mb-3" style="border-style: solid; border-width; .3rem;">
        <label for="per_descripcion">
            Descripción del Período
        </label>
        <input class="form-control" id="per_descripcion" type="text" name="per_descripcion" value="{{ old("per_descripcion", $periodo->per_descripcion) }}">
        <label for="per_periodo">
            Período
        </label>
        <input class="form-control" id="per_periodo" type="text" name="per_periodo" value="{{ old("per_periodo", $periodo->per_periodo) }}">
        <label for="per_estado">
            Estado del Registo
        </label>
        <input class="form-control mb-1" id="per_estado" type="text" name="per_estado" value="{{ old("per_estado", $periodo->per_estado) }}">
    </div>
    <button class="btn-primary btn-lg">
        {{ $btnText }}
    </button>
    <a class="btn-warning btn-lg" href="{{ route("periodos.index") }}">
        Cancelar
    </a>
