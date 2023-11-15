@extends('layout')
@section('content')
  <h1>Продукты</h1>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mt-4">
        <h1>Бас-гитара Vintage VJ75MBK</h1>
      </div>
    </div>
    <div class="row mt-4 mb-5 text-center">
      <div class="col-12">
        <img class="w-25 rounded" src="{{asset('img/Vintage_bas-guitar.jpg')}}">
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
@endsection
