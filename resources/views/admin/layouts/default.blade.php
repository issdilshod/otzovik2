<!DOCTYPE html>
<html lang="ru">
<head>
    @include('admin.components.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('admin.components.header')

    @include('admin.components.menu')

    @yield('content')

    @include('admin.components.footer')
</div>

@include('admin.components.foot')

</body>
</html>
