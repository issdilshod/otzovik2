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
                @if(isset($review))
                    {{__('review_edit_title')}} <b></b>
                @else
                    {{__('review_add_title')}}
                @endif   
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><?=__('menu_dashboard_title')?></a></li>
                <li class="breadcrumb-item"><a href="{{ url('/admin/reviews') }}"><?=__('menu_reviews_title')?></a></li>
                <li class="breadcrumb-item active">
                    @if(isset($review))
                        <?=__('review_edit_title')?>
                    @else
                        <?=__('review_add_title')?>
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
                            <h3 class="card-title">{{__('review_card_title')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('admin/review')}}@isset($review->id){{ '/'.$review->id }}@endisset" method="post">
                            @csrf
                            @isset($review->id)
                            <input type="hidden" name="id" value="{{$review->id}}" />
                            <input type="hidden" name="_method" value="put" />
                            @endisset
                            <div class="card-body">
                                    
                                <div class="form-group">
                                    <label for="text1">{{__('review_text')}}</label>
                                    <textarea  name="text" class="form-control" id="text1">@isset($review->text){{ $review->text }}@endisset</textarea>
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