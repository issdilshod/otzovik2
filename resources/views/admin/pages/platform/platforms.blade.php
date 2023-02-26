@extends('admin.layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{__('platforms_title')}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><?=__('menu_dashboard_title')?></a></li>
                <li class="breadcrumb-item active"><?=__('platforms_title')?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h3 class="card-title mr-auto">{{__('platforms_list_title')}}</h3>

                        <div class="d-flex">
                            <div style="width: 150px;">
                                <form class="input-group input-group-sm d-flex" action="{{url('admin/platform')}}" method="get">
                                    @csrf
                                    <input type="text" name="search" class="form-control" placeholder="{{__('global_search_title')}}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="ml-2">
                                <a class="btn btn-sm btn-primary" href="{{url('admin/platform')}}">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>{{__('global_id')}}</th>
                                <th>{{__('platform_logo')}}</th>
                                <th>{{__('platform_name')}}</th>
                                <th>{{__('global_created_at')}}</th>
                                <th>{{__('global_status')}}</th>
                                <th>{{__('global_actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key => $value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{ asset('storage/'.$value->logo) }}" width="40px" /></td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>
                                        @if ($value->status==$status['wait'])
                                            <span class="badge badge-warning">{{__('global_waiting')}}</span>
                                        @elseif ($value->status==$status['active'])
                                            <span class="badge badge-success">{{__('global_active')}}</span>
                                        @elseif ($value->status==$status['block'])
                                            <span class="badge badge-danger">{{__('global_block')}}</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <div class="d-flex">
                                            <div class="ml-auto">
                                                <a href="{{url('admin/platform/'.$value->id)}}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-pen" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <form class="ml-1" action="{{url('admin/platform/'.$value->id)}}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete" />
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            @include('admin.components.pagination')

        </div>
      </div>
    </section>
</div>
@stop