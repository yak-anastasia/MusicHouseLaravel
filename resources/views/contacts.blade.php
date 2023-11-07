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
        <a class="navbar-brand" href="/"><img src="../img/Logo.svg" alt="Logo" width="50" height="50"></a>
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
                <a class="nav-link active" aria-current="page" href="#">Контакты</a>
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
    <div class="row justify-content-between mt-5 align-items-center">
      <div class="col-6">
        <h1 class="mb-5">Как нас найти</h1>
        <p class="h2">Москва, Новокуркинское ш., 51</p>
        <p class="h3 mt-4 mb-4">8 (957) 262-45-18</p>
        <p class="h3">musichouse@gmail.com</p>
      </div>
      <div class="col-6">
        <div class="map">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3acdcfe573d20aa3b38ad7a2ff91682778245b41f7120be3149ffcbb22c34176&amp;source=constructor" width="618" height="774" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
