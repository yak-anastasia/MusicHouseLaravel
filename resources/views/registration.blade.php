@extends('layout')
@section('content')
  <div class="row mt-5 justify-content-center">
    <div class="col-6 text-center">
      <h1 class="text-center mb-4">Регистрация</h1>
      <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="input-group mb-4">
          <label class="form-label me-4" for="name">Имя:</label>
          <input id="name" class="form-control rounded" name="name" value="{{old('name')}}" type="text" placeholder="Введите имя" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="surname">Фамилия:</label>
          <input id="surname" class="form-control rounded" name="surname" value="{{old('surname')}}" type="text" placeholder="Введите фамилию" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="patronymic">Отчество:</label>
          <input id="patronymic" class="form-control rounded" name="patronymic" value="{{old('patronymic')}}" type="text" placeholder="Введите отчество">
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="login">Логин:</label>
          <input id="login" class="form-control rounded" name="login" value="{{old('login')}}" type="text" placeholder="Введите логин" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="email">Email:</label>
          <input id="email" class="form-control rounded" name="email" value="{{old('email')}}" type="email" placeholder="Введите электронную почту" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="password">Пароль:</label>
          <input id="password" class="form-control rounded" name="password" type="password" placeholder="Введите пароль" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="password_confirmation">Подтверждение пароля:</label>
          <input id="password_confirmation" class="form-control rounded" name="password_confirmation" type="password" placeholder="Подтвердите пароль" required>
        </div>
        <div class="input-group mb-4">
          <input id="agree" class="form-check-input p-2 rounded" name="agree" type="checkbox">
          <label class="form-check-label ms-3" for="agree">Даю согласие на обработку персональных данных</label>
        </div>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <button type="submit" class="btn btn-success mt-3 w-100">Зарегистрироваться</button>
      </form>
    </div>
  </div>
@endsection
