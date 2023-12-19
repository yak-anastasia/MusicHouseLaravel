<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/Logo.svg') }}" type="image/x-icon">
  <title>Админ панель</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col col-md-3 col-xl-2 px-sm-2 px-0 bg-black">
        <div class="d-flex flex-column min-vh-100 align-items-center justify-content-center">
          <h4 class="mx-auto mt-5 fs-3">Админ панель</h4>
          <ul class="nav nav-link fs-5 flex-column mb-sm-auto mb-0 align-items-center">
            <li class="nav-item">
              <a href="{{route('index')}}" class="nav-link">На главную</a>
            </li>
            <li class="nav-item">
              <a href="{{route('products.index')}}" class="nav-link">Каталог</a>
            </li>
            <li class="nav-item">
              <a href="{{route('categories.index')}}" class="nav-link">Категории</a>
            </li>
            <li class="nav-item">
              <a href="{{route('orders')}}" class="nav-link">Заказы</a>
            </li>
            <li class="nav-item mt-1">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Выход</button>
                </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    <script src="{{asset('js/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
