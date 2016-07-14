<nav class="navbar navbar-default navbar-fixed-top" style="background-color:white;">
    <div class="container">
        <div class="navbar-header">
            <a href="/"><img src="{{ URL::asset('assets/img/penguin.png') }}"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav" id="nav-mid">
                <li><a href="/">Trang chủ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Category <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></li>
                        @endforeach
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Create new category</a></li>
                    </ul>
                </li>
                <li><a href="/faqs">Hướng dẫn</a></li>
                <li><a href="/donate">Liên Hệ</a></li>
                <li><a href="/cart">Thanh toán</a></li>
                <li><a href="{{route('game.create')}}">Tạo post mới</a></li>
            </ul>
            <div class="col-sm-3 col-md-3">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>
