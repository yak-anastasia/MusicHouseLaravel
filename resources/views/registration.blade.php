@extends('layout')
@section('content')
    <div class="row mt-5 justify-content-center">
      <div class="col-6 text-center">
          <h1 class="text-center mb-4">Регистрация</h1>
          <form action="" class="mb-5">
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
@endsection
