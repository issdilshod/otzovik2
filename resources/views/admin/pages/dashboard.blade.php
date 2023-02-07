@extends('admin.layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{__('dashboard_title')}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><?=__('dashboard_title')?></li>
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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$university_count}}</h3>

                <p>{{__('dashboard_universities')}}</p>
              </div>
              <div class="icon">
                <i class="fa fa-building"></i>
              </div>
              <a href="{{ url('/admin/universities/universities') }}" class="small-box-footer">{{__('dashboard_go')}} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>

                <p>{{__('dashboard_reviews')}}</p>
              </div>
              <div class="icon">
                <i class="fa fa-star"></i>
              </div>
              <a href="{{ url('/admin/reviews') }}" class="small-box-footer">{{__('dashboard_go')}} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>

                <p>{{__('dashboard_articles')}}</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="{{ url('/admin/articles') }}" class="small-box-footer">{{__('dashboard_go')}} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

                <p>{{__('dashboard_staff')}}</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="{{ url('/admin/users') }}" class="small-box-footer">{{__('dashboard_go')}} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-12">
            </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@stop