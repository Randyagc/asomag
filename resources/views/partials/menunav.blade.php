<nav>
	<menu>
		<menuitem id="demo1">
			<a>
				Menu
			</a>
			<menu>
                <menuitem>
                    <a href="{{ route("home") }}">
                        @lang("home")
                    </a>
                </menuitem>
                <menuitem>
                    <a href="{{ route("about") }}">
                        @lang("About")
                    </a>
                </menuitem>
                <menuitem>
                    <a>
                        Servicios
                    </a>
                    <menu>
                        <menuitem>
                            <a href="{{ route("importdet.importdetprov") }}">
                                Carga Archivos Proveedores
                            </a>
                        </menuitem>
                        <menuitem>
                            <a href="{{ route("importrol.importrol") }}">
                                Carga Archivos Roles
                            </a>
                        </menuitem>
                        <menuitem>
                            <a>
                                Test 3
                            </a>
                        </menuitem>
                        <menuitem>
                            <a>
                                Test 4
                            </a>
                        </menuitem>
                    </menu>
                </menuitem>
                <menuitem id="demo2">
                    <a>Configuraciones</a>
                    <menu>
                        <menuitem id="demo3">
                            <a>
                                Generales</a>
                            <menu>
                                <menuitem>
                                    <a href="{{ route("clients.index") }}">
                                        Clientes
                                    </a>
                                </menuitem>
                                <menuitem>
                                    <a href="{{ route("colores.index") }}">
                                        Colores
                                    </a>
                                </menuitem>
                                <menuitem>
                                    <a href="{{ route("estados.index") }}">
                                        Estados
                                    </a>
                                </menuitem>
                                <menuitem>
                                    <a href="{{ route("periodos.index") }}">
                                        Periodos
                                    </a>
                                </menuitem>
                                <menuitem>
                                    <a href="{{ route("pais.index") }}">
                                        Paises
                                    </a>
                                </menuitem>
                            </menu>
                        </menuitem>
                        <menuitem>
                            <a>
                                test
                            </a>
                        </menuitem>
                    </menu>
                </menuitem>
                <menuitem>
                    <a>
                        Ayuda
                    </a>
                </menuitem>
                @auth
                <menuitem>
                    <a href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>
                </menuitem>
                @else
                <menuitem>
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                </menuitem>
                @endauth
		    </menu>
	    </menuitem>
        {{-- <menuitem><a>no drop</a></menuitem> --}}
    </menu>
</nav>
<script>
var count = 1
setTimeout(demo, 500)
setTimeout(demo, 700)
setTimeout(demo, 900)
setTimeout(reset, 2000)

setTimeout(demo, 2500)
setTimeout(demo, 2750)
setTimeout(demo, 3050)


var mousein = false
function demo() {
   if(mousein) return
   document.getElementById('demo' + count++)
      .classList.toggle('hover')

}

function demo2() {
   if(mousein) return
   document.getElementById('demo2')
      .classList.toggle('hover')
}

function reset() {
   count = 1
   var hovers = document.querySelectorAll('.hover')
   for(var i = 0; i < hovers.length; i++ ) {
      hovers[i].classList.remove('hover')
   }
}

document.addEventListener('mouseover', function() {
   mousein = true
   reset()
})
</script>
