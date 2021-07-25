    @csrf
    <div class="form-group">
        <input type="hidden" name="tpc_cod_desc" value="{{ "1" }}">
        <input type="hidden" class="form-control" name="tpc_user" value="{{ Str::limit(Auth::user()->name, 14) }}">
    </div>
    <div class="from-group shadow mb-3" style="border-style: solid; border-width; .3rem;">
        <label for="tpc_descripcion">
            Descripción del Tipo de cliente
        </label>
            <input class="form-control" id="tpc_descripcion" type="text" name="tpc_descripcion" value="{{ old('tpc_descripcion', $tipocli->tpc_descripcion) }}">
        <label for="tpc_estado">
            Estado del Registro
        </label>
        <input class="form-control mb-1" id="tpc_estado" type="text" name="tpc_estado" value="{{ old('tpc_estado', $tipocli->tpc_estado) }}">
    </div>
    <button class="btn-primary btn-lg">
        {{ $btnText }}
    </button>
    <a class="btn-warning btn-lg" href="{{ route('clitipos.index') }}">
        Cancelar
    </a>
