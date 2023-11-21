@extends('layout')
@section('content') 
  <div class="row text-center mt-4">
    <div class="col-12">
      <h1>Наши товары</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <a href="{{route('products.create')}}" class="btn btn-success my-3">Добавить новый товар</a>
    </div>
  </div>

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
  @foreach ($products as $product)
  <div class="row mb-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="{{asset($product->img_path)}}" class="card-img-top" alt="Музыкальный инструмент">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->model}}</p>
            <p class="card-text">{{$product->description}}</p>
            <p class="card-text mt-2">{{$product->price}}</p>
            <a href="{{route('products.edit', $product)}}" class="btn btn-success">Изменить</a>
        </div>
        <div class="card-footer text-center d-flex justify-content-between">
          <a href="{{route('show', $product)}}" class="btn btn-success">Подробнее</a>
          <button type="button" class="btn btn-danger w-50">В корзину</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
