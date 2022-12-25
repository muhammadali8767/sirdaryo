<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="https://itlive.uz" target="_blank"><i class="nav-icon fas fa-phone"></i> +99897 866-50-50</a>
        </li>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-link" type="submit">Выход</button>
        </form>
    </ul>
</nav>
