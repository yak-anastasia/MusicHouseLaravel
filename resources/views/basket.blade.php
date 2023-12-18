@extends('layout')
@section('content')
  <div class="row">
    <div class="col-12 text-center mt-4">
      <h1>Корзина</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mb-5">
        <table class="table mt-5">
            <tbody>
              <tr class="d-flex justify-content-center text-center">
                <td><img src="{{asset('img/Vintage_bas-guitar.jpg')}}" height="250px"></td>
                <td class="d-flex align-items-center pe-5"><h5 class="fw-bold">Бас-гитара Vintage VJ75MBK</h5></td>
                <td class="d-flex align-items-center pe-5">
                  <div class="input_number">
                    <button class="btn btn-danger rounded-circle fw-bold">-</button>
                    <input class="w-25 mx-3 text-center" type="number" value="1" min="1" max="999">
                    <button class="btn btn-danger rounded-circle fw-bold">+</button>
                  </div>
                </td>
                <td class="d-flex align-items-center pe-5"><h5>29 990 р.</h5></td>
              </tr>
            </tbody>
        </table>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-4">
        <form action="POST">
            @csrf
            <div class="input-group mb-3">
                <input id="password" class="form-control" name="password" type="password" placeholder="Введите пароль" required>
                <button type="submit" class="btn btn-success">Подтвердить</button>
            </div>
        </form>
    </div>
  </div>
@endsection
