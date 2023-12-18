@extends('layout')
@section('content')
  <div class="row mt-5 justify-content-center">
    <div class="col-6 text-center">
      <h1 class="text-center mb-4">Вход</h1>
      <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="input-group mb-4">
          <label class="form-label me-4" for="login">Логин:</label>
          <input id="login" class="form-control rounded" name="login" type="text" placeholder="Введите логин" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="password">Пароль:</label>
          <input id="password" class="form-control rounded" name="password" type="password" placeholder="Введите пароль" required>
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
        <button class="btn btn-success mt-4 w-100 fw-bold" type="submit">Войти</button>
      </form>
    </div>
  </div>
@endsection
