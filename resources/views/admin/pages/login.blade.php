@extends('admin.layouts.log')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <span href="#" class="h1"><b>Admin</b>LTE</span>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Войдите чтобы начать работу</p>

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
                class="form-control @if ($errors->has('username')) is-invalid @endif" 
                placeholder="Логин"
                name="username"
                value="@isset($username) {{ $username }} @endisset"
            />
            @if ($errors->has('username'))
                <span class="error invalid-feedback">Заполните поле</span>
            @endif
        </div>
        <div class="input-group mb-3">
            <input 
                type="password" 
                class="form-control @if ($errors->has('password')) is-invalid @endif" 
                placeholder="Пароль"
                name="password"
            />
            @if ($errors->has('password'))
                <span class="error invalid-feedback">Заполните поле</span>
            @endif
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                    Запомнить
                </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Вход</button>
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