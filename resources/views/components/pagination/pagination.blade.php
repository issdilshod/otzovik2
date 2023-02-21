<?php

use App\Services\Admin\Misc\PaginatorService;

$paginatorService = new PaginatorService($list->currentPage(), $list->lastPage());

?>

@if($paginatorService::hasMore())

<nav>
    <ul class="pagination">

        <li class="page-item">
            <a class="page-link page-prev" href="{{$paginatorService::getUrl($paginatorService::prevPage())}}">&nbsp;</a>
        </li>

        <!-- first page -->
        @if ($paginatorService::hasStartNumber())
            <li class="page-item">
                <a class="page-link" href="{{$paginatorService::getUrl($paginatorService::hasStartNumber())}}">{{$paginatorService::hasStartNumber()}}</a>
            </li> 
        @endif

        <!-- main pages -->
        @for ($i = $paginatorService::$startNumber; $i<=$paginatorService::$endNumber; $i++)
            <li class="page-item">
                <a class="page-link @if ($i==$paginatorService::$currentPage){{'active'}}@endif" href="{{$paginatorService::getUrl($i)}}">{{$i}}</a>
            </li>
        @endfor

        <!-- divider -->
        <!--li class="page-item">
            <a class="page-link" href="#">...</a>
        </li-->

        <!-- last page -->
        @if ($paginatorService::hasEndNumber())
            <li class="page-item">
                <a class="page-link" href="{{$paginatorService::getUrl($paginatorService::hasEndNumber())}}">{{$paginatorService::hasEndNumber()}}</a>
            </li>
        @endif

        <li class="page-item">
            <a class="page-link page-next" href="{{$paginatorService::getUrl($paginatorService::nextPage())}}">&nbsp;</a>
        </li>

    </ul>
</nav>

@endif