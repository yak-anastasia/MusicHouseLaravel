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
                <a class="nav-link active" aria-current="page" href="#">Каталог</a>
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
    <div class="row text-center mt-4">
      <div class="col-12">
        <h1>Наши товары</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row mt-4 mb-3">
        <div class="col-12">
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Категории товаров</option>
                <option value="1">струнные инструменты</option>
                <option value="2">клавишные инструменты</option>
                <option value="3">смычковые инструменты</option>
            </select>
        </div>
    </div>
  </div>

  <div class="container">
    <div class="row mb-5">
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <a href="../pages/product.html" class="text-decoration-none link-dark"><img src="../img/Vintage_bas-guitar.jpg" class="card-img-top" alt="Bas-guitar"></a>
          <div class="card-body">
            <a href="../pages/product.html" class="text-decoration-none link-dark">
              <h5 class="card-title">Бас-гитара Vintage VJ75MBK</h5>
            </a>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">29 990 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="../img/Midi_keyboard.jpg" class="card-img-top" alt="Midi keyboard">
          <div class="card-body">
            <h5 class="card-title">Midi клавиатура Donner Music D-37</h5>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">15 990 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="../img/Electro-acoustic_guitar.jpg" class="card-img-top" alt="Electro-acoustic guitar">
          <div class="card-body">
            <h5 class="card-title">Электроакустическая гитара Godin Metropolis Composer EQ</h5>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">129 990 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="../img/Violin.jpg" class="card-img-top" alt="Violin">
          <div class="card-body">
            <h5 class="card-title">Cкрипка Kryštof Edlinger E9A0</h5>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">8 990 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="../img/Piano.jpg" class="card-img-top" alt="Acoustic Piano">
          <div class="card-body">
            <h5 class="card-title">Акустический рояль Kawai GL10 M/ PEP</h5>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">1 900 000 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
