@isset($children)

    @if(count($children)>0)
        <ul>
            @foreach($children as $child)
                <li class="nav nav-second-level"><a href="{{asset($child->link_meni)}}">{{$child->name_meni}}</a></li>


            @endforeach

        </ul>
     @endif
@endisset







