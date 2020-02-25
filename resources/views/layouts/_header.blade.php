<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="{{route('home')}}" class="navbar navbar-brand">Weibo APP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse  navbar-collapse justify-content-end" id="navBarNav">
            <div class="navbar-nav d-flex align-items-end">
                @if(Auth::check())
                    <li class="nav-item">
                        <a href="#" class="nav-link">用户列表</a>
                    </li>
                    <div class="nav-item dropdown show">
                        <a href="#" class="nav-link dropdown-toggle" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="{{ route('users.show',Auth::user()) }}" class="dropdown-item">个人中心</a>
                            <a href="#" class="dropdown-item">编辑资料</a>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item">
                                <form action="{{ route('logout',Auth::user()) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-block btn-danger" name="button">
                                        退出
                                    </button>
                                </form>
                            </a>
                        </div>
                    </div>
                @else
                <a href="{{route('help')}}" class="nav-item nav-link">帮助</a>
                <a href="{{ route('login') }}" class="nav-link">登录</a>
                @endif
            </div>
        </nav>
    </div>
</nav>
