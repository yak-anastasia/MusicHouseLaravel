<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="shortcut icon" href="{{asset('img/Logo.svg')}}" type="image/x-icon">
  <title>Music House</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('img/Logo.svg')}}" alt="Logo" width="50" height="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index')}}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products.index')}}">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('categories.index')}}">Категории</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('orders')}}">Заказы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('regForm')}}">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('authorization')}}">Вход</a>
                        </li>
                        <li class="nav-item mt-1    ">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Выход</button>
                            </form>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="{{route('basket')}}"><img src="{{asset('img/basket.svg')}}" alt="basket" width="35" height="35"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @if (Session::has('info'))
        <div class="alert alert-warning">
            {{session('info')}}
        </div>
    @endif
    @if (isset($info))
        <div class="alert alert-warning">
            {{$info}}
        </div>
    @endif

    <main class="container">
        @yield('content')
    </main>
    {{-- <footer class="mt-auto">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <ul class="navbar-nav me-auto pt-3 mx-auto mt-2 mb-lg-0">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
        </nav>
    </footer> --}}
    <script src="{{asset('js/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
