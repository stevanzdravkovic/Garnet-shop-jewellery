<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse" >
        <ul class="nav" id="main-menu">
            @foreach($meni as $m)

                @if($m->parent_id==0)
                    <li class="category-nav show-on-click">
                        <a  href="{{asset($m->link_meni)}}" ><i class="caret"></i>{{$m->name_meni}} </a>
                        @component('components.adminComponents.meni',
                        [
                            'children'=>$m->submeni,
                            'meni'=>$meni
                        ])

                        @endcomponent
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>