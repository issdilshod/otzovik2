<div class="col-12 text-right">
    <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item">
            <a class="page-link" href="#">«</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="{{$list->nextPageUrl()}}">»</a>
        </li>
    </ul>
</div>
<div class="col-12 text-right mb-2">
    <div>
        {{__('pagination_shown')}} {{ $list->count() }} {{__('pagination_from')}} {{ $list->total() }}
    </div>
</div>