@extends("layout")

@section("titulo", "Importar Proveedores")

@section("content")

<h3 align="center" style="font-weight: bold;">
    Importar Archivo de Proveedores - Formato EXCEL
</h3>

<form action="{{ route('import.importprov') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mt-4 mx-5">
        <input class="form-control" type="file" name="file">
    </div>
    <button class="btn-primary shadow mx-5">
        Importar Proveedores
    </button>
</form>
@endsection
