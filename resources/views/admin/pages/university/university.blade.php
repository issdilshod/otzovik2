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
                @if(isset($university))
                    {{__('university_edit_title')}} {{$university->name}}
                @else
                    {{__('university_add_title')}}
                @endif   
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><?=__('menu_dashboard_title')?></a></li>
                <li class="breadcrumb-item"><a href="{{ url('/admin/universities') }}"><?=__('menu_universities_title')?></a></li>
                <li class="breadcrumb-item active">
                    @if(isset($university))
                        <?=__('university_edit_title')?>
                    @else
                        <?=__('university_add_title')?>
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
                            <h3 class="card-title">{{__('university_card_title')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('admin/university')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name1">{{__('university_name')}}</label>
                                    <input name="name" class="form-control" id="name1">
                                </div>
                                <div class="form-group">
                                    <label for="slug1">{{__('university_slug')}}</label>
                                    <input name="slug" class="form-control" id="slug1">
                                </div>
                                <div class="form-group">
                                    <label for="description1">{{__('university_description')}}</label>
                                    <textarea name="description" class="form-control" id="description1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="logo1">{{__('university_logo')}}</label>
                                    <input name="logo" type="file" class="form-control" id="logo1">
                                </div>
                            </div>
                            
                            <!-- /.card-body -->

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">{{__('unoversity_save_button')}}</button>
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