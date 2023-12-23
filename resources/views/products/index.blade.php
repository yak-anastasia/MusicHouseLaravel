@extends('layout')
@section('content')
  <div class="row text-center mt-4">
    <div class="col-12">
      <h1>Наши товары</h1>
    </div>
  </div>
  @if (Auth::check() && Auth::user()->is_admin)
    <div class="row">
        <div class="col-12">
        <a href="{{route('products.create')}}" class="btn btn-success my-3">Добавить новый товар</a>
        </div>
    </div>
  @endif
  <div class="row mt-4 mb-3">
      <div class="col-12 d-flex justify-content-center">
        <form action="{{route('products.filter')}}" method="POST" class="d-flex flex-wrap">
            @csrf
            <div>
                <p class="m-0">Категория:</p>
                <select name="filter" id="filter" class="form-select mb-3">
                    <option value="all">Все</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <p class="m-0">Сортировка:</p>
                <select name="sort" id="sort" class="form-select ms-1 mb-3">
                    <option value="country">По стране (А-Я)</option>
                    <option value="title">По наименованию</option>
                    <option value="price">Сначала дешевле</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success ms-2 mb-3 align-self-end">Применить</button>
        </form>
      </div>
  </div>
  @foreach ($products as $product)
  <div class="row mb-5">
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="{{asset($product->img_path)}}" class="card-img-top" alt="Музыкальный инструмент">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->model}}</p>
            <p class="card-text mt-2">{{$product->price}} ₽</p>
            @if (Auth::check() && Auth::user()->is_admin)
                <form action="{{route('products.destroy', $product)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('products.edit', $product)}}" class="btn btn-success">Изменить</a>
                    <button type="submit" class="btn btn-danger ms-4 w-50">Удалить</button>
                </form>
            @endif
        </div>
        <div class="card-footer text-center d-flex justify-content-between">
          <a href="{{route('products.show', $product)}}" class="btn btn-success">Подробнее</a>
          @if (Auth::check() && !Auth::user()->is_admin)
            <a href="{{route('cart.store', ['product_id'=>$product->id])}}" class="btn btn-danger w-50">В корзину</a>
          @endif
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
