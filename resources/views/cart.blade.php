@extends('layout')
@section('content')
  <div class="row">
    <div class="col-12 text-center mt-4">
      <h1>Корзина</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mb-5">
        @foreach ($products as $product)
        <table class="table mt-5">
            <tbody>
              <tr class="d-flex justify-content-center text-center">
                    <td><img src="{{asset($product->img_path)}}" height="250px"></td>
                    <td class="d-flex align-items-center pe-5"><h5 class="fw-bold">{{$product->title}}</h5></td>
                    <td class="d-flex align-items-center pe-5"><h5 class="fw-bold">{{$product->model}}</h5></td>
                    <td class="d-flex align-items-center pe-5"><h5>{{$product->pivot->qty * $product->price}} ₽</h5></td>
              </tr>
              <tr>
                <td>
                    <form action="{{route('cart.change', ['product_id'=>$product->id])}}" method="POST">
                        @csrf
                        <input type="number" name="qty" value="{{$product->pivot->qty}}" min="0" max="{{$product->qty}}">
                        <button type="submit" class="btn btn-success">Изменить</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('cart.destroy', ['id'=>$product->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
              </tr>
            </tbody>
        </table>
        @endforeach
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-4">
        <form action="{{route('orders.store')}}" method="POST" class="text-center">
            @csrf
            <div class="input-group mb-5">
                <input id="password" class="form-control" name="password" type="password" placeholder="Введите пароль" required>
                <button type="submit" class="btn btn-success">Оформить заказ</button>
            </div>
        </form>
    </div>
  </div>
@endsection
