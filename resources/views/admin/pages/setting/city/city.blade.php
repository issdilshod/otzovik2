@extends('admin.layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
                @if(isset($city))
                    {{__('city_edit_title')}} <b>{{$city->name}}</b>
                @else
                    {{__('city_add_title')}}
                @endif   
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><?=__('menu_dashboard_title')?></a></li>
                <li class="breadcrumb-item"><a href="{{ url('/admin/settings/cities') }}"><?=__('menu_cities_title')?></a></li>
                <li class="breadcrumb-item active">
                    @if(isset($city))
                        <?=__('city_edit_title')?>
                    @else
                        <?=__('city_add_title')?>
                    @endif
                </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('city_card_title')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('admin/settings/city')}}@isset($city->id){{ '/'.$city->id }}@endisset" method="post">
                            @csrf
                            @isset($city->id)
                            <input type="hidden" name="id" value="{{$city->id}}" />
                            <input type="hidden" name="_method" value="put" />
                            @endisset
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name1">{{__('city_name')}}</label>
                                    <input name="name" class="form-control" id="name1" value="@isset($city->name){{ $city->name }}@endisset">
                                </div>

                                <div class="form-group">
                                    <label for="sort1">{{__('city_sort')}}</label>
                                    <input name="sort" class="form-control" id="sort1" value="@isset($city->sort){{ $city->sort }}@endisset">
                                </div>

                                <div class="form-group">
                                    <label for="slug1">{{__('city_slug')}}</label>
                                    <input name="slug" class="form-control" id="slug1" value="@isset($city->slug){{ $city->slug }}@endisset">
                                </div>

                            </div>
                            <!-- /.card -->

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">{{__('global_save_button')}}</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
@stop