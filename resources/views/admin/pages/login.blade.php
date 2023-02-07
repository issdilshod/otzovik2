@extends('admin.layouts.log')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <span href="#" class="h1"><b>{{env('APP_NAME')}}</b>Admin</span>
    </div>
    <div class="card-body">
      <p class="login-box-msg">{{__('login_welcome_title')}}</p>

      <form action="{{ url('/admin/login') }}" method="POST">
        @csrf
        @isset($msg)
            <div class="form-group mb-3">
                <div class="alert alert-danger">{{ $msg }}</div>
            </div>
        @endisset
        <div class="input-group mb-3">
            <input 
                type="text"
                class="form-control @if ($errors->has('email')) is-invalid @endif" 
                placeholder="{{__('login_email')}}"
                name="email"
                value="@isset($email) {{ $email }} @endisset"
            />
            @if ($errors->has('username'))
                <span class="error invalid-feedback">{{__('login_fill_fields')}}</span>
            @endif
        </div>
        <div class="input-group mb-3">
            <input 
                type="password" 
                class="form-control @if ($errors->has('password')) is-invalid @endif" 
                placeholder="{{__('login_password')}}"
                name="password"
            />
            @if ($errors->has('password'))
                <span class="error invalid-feedback">{{__('login_fill_fields')}}</span>
            @endif
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                    {{__('login_remember')}}
                </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{__('login_login_button')}}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@stop