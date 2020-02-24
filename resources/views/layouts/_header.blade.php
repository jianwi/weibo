<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="{{route('home')}}" class="navbar navbar-brand">Weibo APP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse  navbar-collapse " id="navBarNav">
            <div class="navbar-nav d-flex align-items-end">
                <a href="{{route('help')}}" class="nav-item nav-link">帮助</a>
                <a href="{{route('about')}}" class="nav-link">关于</a>
            </div>
        </nav>
    </div>
</nav>
