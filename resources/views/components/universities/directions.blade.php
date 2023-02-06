<ul class="tags">
    @foreach ($directions as $direction)
        <li><a href="#">{{$direction->name}}</a></li>
    @endforeach
    <li><a href="#" class="more">Смотреть еще</a></li>
</ul>