@extends('layout')
@section('content')
  <div class="row">
    <div class="col-12 text-center mt-4">
      <h1>{{$product->title}}</h1>
    </div>
  </div>
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-6 p-0" style="width: 440px">
      <img class="rounded" src="{{asset($product->img_path)}}">
    </div>
    <div class="col-6 p-0">
        <table class="table table-border">
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
  @if (Auth::check() && !Auth::user()->is_admin)
  <div class="row mt-5 mx-auto">
    <div class="col-12 d-flex justify-content-center align-items-center">
            <a href="{{route('cart.store', ['product_id'=>$product->id])}}" class="btn btn-danger w-50">В корзину</a>
        </div>
    </div>
  @endif
@endsection
