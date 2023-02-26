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
                @if(isset($platform))
                    {{__('platform_edit_title')}} <b>{{$platform->name}}</b>
                @else
                    {{__('platform_add_title')}}
                @endif   
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><?=__('menu_dashboard_title')?></a></li>
                <li class="breadcrumb-item"><a href="{{ url('/admin/platforms') }}"><?=__('menu_platforms_title')?></a></li>
                <li class="breadcrumb-item active">
                    @if(isset($platform))
                        <?=__('platform_edit_title')?>
                    @else
                        <?=__('platform_add_title')?>
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
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('platform_card_title')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('admin/platform')}}@isset($platform->id){{ '/'.$platform->id }}@endisset" method="post" enctype="multipart/form-data">
                            @csrf
                            @isset($platform->id)
                            <input type="hidden" name="id" value="{{$platform->id}}" />
                            <input type="hidden" name="_method" value="put" />
                            @endisset
                            <div class="card-body">

                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basic" data-toggle="pill" href="#basic1" role="tab" aria-controls="basic1" aria-selected="false">{{__('global_basic')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact" data-toggle="pill" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">{{__('global_contacts')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="setting" data-toggle="pill" href="#setting1" role="tab" aria-controls="setting1" aria-selected="false">{{__('global_settings')}}</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <!-- basic -->
                                    <div class="tab-pane fade active show" id="basic1" role="tabpanel" aria-labelledby="basic1">
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name1">{{__('platform_name')}}</label>
                                                    <input name="name" class="form-control" id="name1" value="@isset($platform->name){{ $platform->name }}@endisset">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="org1">{{__('platform_org')}}</label>
                                                    <input name="org" class="form-control" id="org1" value="@isset($platform->org){{ $platform->org }}@endisset">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="license1">{{__('platform_license')}}</label>
                                                    <input name="license" class="form-control" id="license1" value="@isset($platform->license){{ $platform->license }}@endisset">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="index1">{{__('platform_index')}}</label>
                                                    <input name="index" class="form-control" id="index1" value="@isset($platform->index){{ $platform->index }}@endisset">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description1">{{__('platform_description')}}</label>
                                                    <textarea name="description" class="form-control" id="description1" style="height: 200px;">@isset($platform->description){{ $platform->description }}@endisset</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="logo1">{{__('platform_logo')}}</label>
                                                    <input name="logo" type="file" class="form-control" id="logo1">
                                                </div>
                                                @isset($platform->logo)
                                                <img src="{{ asset('storage/'.$platform->logo) }}" width="200px"/>
                                                @endisset
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="foundation1">{{__('platform_foundation')}}</label>
                                                    <input name="foundation" class="form-control" id="foundation1" value="@isset($platform->foundation){{ $platform->foundation }}@endisset">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div lass="form-group">
                                                    <label>{{__('global_status')}}</label>
                                                    <select class="form-control" name="status">
                                                        <?php $value = \Illuminate\Support\Facades\Config::get('status.active'); ?>
                                                        <option value="{{$value}}" <?php if (isset($platform) && $platform->status==$value){ echo 'selected'; } ?>>{{\App\Services\Admin\Misc\SystemService::get_status_name_by_id($value)}}</option>

                                                        <?php $value = \Illuminate\Support\Facades\Config::get('status.wait'); ?>
                                                        <option value="{{$value}}" <?php if (isset($platform) && $platform->status==$value){ echo 'selected'; } ?>>{{\App\Services\Admin\Misc\SystemService::get_status_name_by_id($value)}}</option>

                                                        <?php $value = \Illuminate\Support\Facades\Config::get('status.block'); ?>
                                                        <option value="{{$value}}" <?php if (isset($platform) && $platform->status==$value){ echo 'selected'; } ?>>{{\App\Services\Admin\Misc\SystemService::get_status_name_by_id($value)}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.basic -->

                                    <!-- contact -->
                                    <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1">
                                        <div class="row mt-2">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address1">{{__('platform_address')}}</label>
                                                    <input name="address" class="form-control" id="address1" value="@isset($platform->address){{ $platform->address }}@endisset">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone1">{{__('platform_phone')}}</label>
                                                    <input name="phone" class="form-control" id="phone1" value="@isset($platform->phone){{ $platform->phone }}@endisset">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email1">{{__('platform_email')}}</label>
                                                    <input name="email" class="form-control" id="email1" value="@isset($platform->email){{ $platform->email }}@endisset">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="website1">{{__('platform_website')}}</label>
                                                    <input name="website" class="form-control" id="website1" value="@isset($platform->website){{ $platform->website }}@endisset">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.contact -->

                                    <!-- settings -->
                                    <div class="tab-pane fade" id="setting1" role="tabpanel" aria-labelledby="setting1">
                                        <div class="row mt-2">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="slug1">{{__('platform_slug')}}</label>
                                                    <input name="slug" class="form-control" id="slug1" value="@isset($platform->slug){{ $platform->slug }}@endisset">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.settings -->
                                </div>

                            </div>
                            <!-- /.card-body -->

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