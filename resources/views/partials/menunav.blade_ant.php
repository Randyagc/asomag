
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">
            ASOFEMAG
        </div>
        <ul>
            <li class="active">
                <a href="{{ route("home") }}">
                    @lang("Home")
                </a>
            </li>
            <li>
                <a href="{{ route("about") }}">
                    @lang("About")
                </a>
            </li>
            <li>
                <a href="#" class="serv-btn">
                    @lang("Services")
                    <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li>
                        <a href="{{ route("importdet.importdetprov") }}">
                            Carga Archivos Proveedores
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("importrol.importrol") }}">
                            Carga Archivos Roles
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="feat-btn">
                    Configuraciones Generales
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li>
                        <a href="{{ route("clients.index") }}">
                            Clientes
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("colores.index") }}">
                            Colores
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("estados.index") }}">
                            Estados
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("periodos.index") }}">
                            Períodos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("pais.index") }}">
                            Paises
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("clitipos.index") }}">
                            Tipos Clientes
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route("repormes.index") }}">
                    Reportes
                </a>
            </li>
            <li><a href="#">Overview</a></li>
            <li><a href="#">Shortcuts</a></li>
            <li><a href="#">Feedback</a></li>
            @auth
                <li>
                    <a href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                </li>
            @endauth
        </ul>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
<script>
    $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
    });

    $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
    });

    $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
    });

    $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
    });
</script>
