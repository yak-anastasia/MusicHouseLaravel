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
                <a class="nav-link active" aria-current="page" href="#">Регистрация</a>
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
    <div class="row mt-5 justify-content-center">
      <div class="col-6 text-center">
          <h1 class="text-center mb-4">Регистрация</h1>
          <form action="">
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="firstname">Имя:</label>
                  <input id="firstname" class="form-control rounded" name="firstname" type="text" placeholder="Введите имя" required>
              </div>
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="lastname">Фамилия:</label>
                  <input id="lastname" class="form-control rounded" name="lastname" type="text" placeholder="Введите фамилию" required>
              </div>
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="patronymic">Отчество:</label>
                  <input id="patronymic" class="form-control rounded" name="patronymic" type="text" placeholder="Введите отчество" required>
              </div>
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="login">Логин:</label>
                  <input id="login" class="form-control rounded" name="login" type="text" placeholder="Введите логин" required>
              </div>
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="email">Email:</label>
                  <input id="email" class="form-control rounded" name="email" type="email" placeholder="Введите электронную почту" required>
              </div>
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="password">Пароль:</label>
                  <input id="password" class="form-control rounded" name="password" type="password" placeholder="Введите пароль" required>
              </div>
              <div class="input-group mb-4">
                  <label class="form-label me-4" for="password_confirm">Подтверждение пароля:</label>
                  <input id="password_confirm" class="form-control rounded" name="password_confirm" type="password" placeholder="Подтвердите пароль" required>
              </div>
              <div class="input-group mb-4">
                  <input id="agree" class="form-check-input p-2 rounded" name="agree" type="checkbox">
                  <label class="form-check-label ms-3" for="agree">Даю согласие на обработку персональных данных</label>
              </div>
              <button class="btn btn-success mt-3 w-100" type="submit">Зарегистрироваться</button>
          </form>
      </div>
    </div>
  </div>

  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
