<nav class="main-navbar">
    <div class="container">
        <!-- menu -->
        <ul class="main-menu">
            @foreach($meni as $m)
                <li><a href="{{$m->ruta}}">{{$m->meni_ime}}</a></li>
            @endforeach
        </ul>
    </div>
</nav>