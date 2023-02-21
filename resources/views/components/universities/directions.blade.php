<ul class="tags">
    @foreach ($directions as $direction)
        <li>
            <a href="#" data-slug="{{$direction->slug}}" class="<?php if (isset($current_direction) && $current_direction==$direction->slug){ echo 'active'; }?>">{{$direction->name}}</a>
        </li>
    @endforeach
    <!--li><a href="#" class="more">Смотреть еще</a></li-->
</ul>