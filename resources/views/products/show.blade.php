@extends('layout')
@section('content')
  <div class="row">
    <div class="col-12 text-center mt-4">
      <h1>{{$product->title}}</h1>
    </div>
  </div>
  <div class="row mt-4 mb-5 text-center">
    <div class="col-12">
      <img class="w-25 rounded" src="{{asset($product->img_path)}}">
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
            <td>{{$product->category->title}}</td>
          </tr>
          <tr>
            <th>Описание</th>
            <td>{{$product->description}}</td>
          </tr>
          <tr>
            <th>Год выпуска</th>
            <td>{{$product->year}}</td>
          </tr>
          <tr>
            <th>Модель</th>
            <td>{{$product->model}}</td>
          </tr>
          <tr>
            <th>Цена</th>
            <td>{{$product->price}} ₽</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
