<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../img/Logo.svg" type="image/x-icon">
  <title>Music House</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="/><img src="../img/Logo.svg" alt="Logo" width="50" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('registration')}}">Регистрация</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('authorization')}}">Вход</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('basket')}}"><img src="../img/basket.svg" alt="basket" width="35" height="35"></a>
              </li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-12 text-center mt-4">
        <h1>Бас-гитара Vintage VJ75MBK</h1>
      </div>
    </div>
    <div class="row mt-4 mb-5 text-center">
      <div class="col-12">
        <img class="w-25 rounded" src="../img/Vintage_bas-guitar.jpg">
      </div>
      <div class="row mt-4 mx-auto">
        <div class="col-12">
          <button type="button" class="btn btn-danger w-25">В корзину</button>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-3">
        <table class="table table-borderless">
          <tbody>
            <tr>
              <th>Категория</th>
              <td>Струнные</td>
            </tr>
            <tr>
              <th>Год выпуска</th>
              <td>2021</td>
            </tr>
            <tr>
              <th>Модель</th>
              <td>Vintage VJ75MBK</td>
            </tr>
            <tr>
              <th>Цена</th>
              <td>29 990 р.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
