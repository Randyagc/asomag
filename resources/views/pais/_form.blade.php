    @csrf
    <div>
        <input type="hidden" name="pai_cod_desc" value="{{ "1" }}">
        <input type="hidden" class="form-control" name="pai_user" value="{{ Str::limit(Auth::user()->name, 14) }}">
    </div>
    <div class="from-group shadow mb-3" style="border-style: solid; border-width; .3rem;">
        <label for="pai_descripcion">
            Nombre del Pais
        </label>
        <input class="form-control" id="pai_descripcion" type="text" name="pai_descripcion" value="{{ old("pai_descripcion", $pais->pai_descripcion) }}">
        <label for="pai_nacionalidad">
            Gentilicio
        </label>
        <input class="form-control" id="pai_nacionalidad" type="text" name="pai_nacionalidad" value="{{ old("pai_nacionalidad", $pais->pai_nacionalidad) }}">
        <label for="pai_cod_internacional">
            Código Internacional
        </label>
        <input class="form-control" id="pai_cod_internacional" type="text" name="pai_cod_internacional" value="{{ old("pai_cod_internacional"), $pais->pai_cod_internacional }}">
        <label for="pai_estado">
            Estado del Registro
        </label>
        <input class="form-control mb-1" id="pai_estado" type="text" name="pai_estado" value="{{ old("pai_estado"), $pais->pai_estado }}">
    </div>
    <button class="btn-primary btn-lg">
        {{ $btnText }}
    </button>
    <a class="btn-warning btn-lg" href="{{ route("pais.index") }}">
        Cancelar
    </a>
