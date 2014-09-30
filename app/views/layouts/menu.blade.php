<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">.:: Coorporativo ::.</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utilerias <b class="caret"></b></a>
                <ul class="dropdown-menu">
                        <li><a href="{{ route('insertar-pedimentos')  }}">Insertar Pedimentos</a></li>
                </ul>
            </li>
        </ul>
        </div>
    </div>
</div>