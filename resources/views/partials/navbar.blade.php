<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="{{ url('/') }}" id="nav-brand">Link Never Die</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav" id="nav-mid">
                <li id="nav-division"><a href="{{url('/intro')}}" id="row-content">Introduction</a>
                <li id="nav-division" class="dropdown">
                    <a id="row-content" class="dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                <li id="nav-division"><a href="{{url('/faq')}}" id="row-content">FAQs</a>
                @if (Auth::check())
                    @if (Auth::user()->role == "admin")
                        <li id="nav-division"><a href="{{ url('/admin/game/create') }}" id="row-content">Create new post</a>
                    @endif
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Hello, {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>