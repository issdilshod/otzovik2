<!doctype html>
<html lang="ru">
<head>
   @include('components.head')
</head>
<body>
    <header class="header">
        @include('components.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        @include('components.footer')
    </footer>

    @include('components.foot')
</body>
</html>