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
                <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('registration')}}">Регистрация</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Вход</a>
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
    <div class="row mt-5 justify-content-center">
      <div class="col-6 text-center">
          <h1 class="text-center mb-4">Вход</h1>
          <form action="">
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="login">Логин:</label>
                  <input id="login" class="form-control rounded" name="login" type="text" placeholder="Введите логин" required>
              </div>
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="password">Пароль:</label>
                  <input id="password" class="form-control rounded" name="password" type="password" placeholder="Введите пароль" required>
              </div>
              <button class="btn btn-success mt-4 w-100 fw-bold" type="submit">Войти</button>
          </form>
      </div>
    </div>
  </div>

  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
