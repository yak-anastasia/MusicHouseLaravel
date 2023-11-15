@extends('layout')
@section('content')
  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="col-6 text-center">
          <h1 class="text-center mb-4">Вход</h1>
          <form action="" class="mb-5">
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
@endsection