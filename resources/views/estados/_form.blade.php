    @csrf
    <div>
        <input type="hidden" name="est_cod_desc" value="{{ "Mix campos" }}">
        <input type="hidden" class="form-control" name="est_user" value="{{ Str::limit(Auth::user()->name, 14) }}">
    </div>
    <div class="from-group shadow mb-3" style="border-style: solid; border-width; .3rem;">
        <label for="est_descripcion">
            Descripción del Estado Registro
        </label>
        <input class="form-control" id="est_descripcion" type="text" name="est_descripcion" value="{{ old('est_descripcion', $estado->est_descripcion) }}">
        <label for="est_estado">
            Estado del Registro
        </label>
        {{-- <input class="form-control mb-1" id="est_estado" type="text" name="est_estado" value="{{ old('est_estado', $estado->est_estado) }}"> --}}
        <select name="est_estado" class="form-control border-0 bg-yellow shadow-sm">
            <option>Elija estado</option>
            @foreach($estado_s as $estado)
                <option style="font-color: #34de;" value="{{$estado->id}}">{{ $estado->id }}.{{ $estado->est_descripcion }}</option>
            @endforeach
        </select>
    </div>
    <button class="btn-primary btn-lg">
        {{ $btnText }}
    </button>
    <a class="btn-warning btn-lg" href="{{ route('estados.index') }}">
        Cancelar
    </a>
