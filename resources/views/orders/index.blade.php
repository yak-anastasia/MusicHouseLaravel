@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12 text-center mt-4">
            <h1>Список заказов</h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        @if (Auth::user()->is_admin)
                        <th scope="col">Фамилия</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Отчество</th>
                        @endif
                        <th scope="col">Товары</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Дата заказа</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                <tr>
                    @if (Auth::user()->is_admin)
                    <td scope="row">{{$order->user->surname}}</td>
                    <td scope="row">{{$order->user->name}}</td>
                    <td scope="row">{{$order->user->patronymic}}</td>
                    @endif

                    <td scope="row">
                        @foreach ($order->products as $product)
                        {{$product->title}},
                        @endforeach
                    </td>
                    <td scope="row">{{$order->status}}</td>
                    <td scope="row">{{$order->created_at}}</td>
                    <td scope="row">
                        <form action="{{route('orders.update', $order)}}" method="POST">
                            @csrf
                            @method('PUT')
                            @if (Auth::user()->is_admin && $order->status == 'Новый')
                                <input type="hidden" name="status" value="Подтвердить">
                                <button type="submit" class="btn btn-success">Подтвердить</button>
                            @elseif (Auth::user()->is_admin && $order->status == 'Подтвердить')
                                <input type="hidden" name="status" value="Выполнить">
                                <button type="submit" class="btn btn-success">Выполнить</button>
                            @endif
                        </form>
                        <form action="{{route('orders.destroy', $order)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            @if (!Auth::user()->is_admin && $order->status == 'Новый')
                                <input type="hidden" name="status" value="Удалить">
                                <button type="submit" class="btn btn-success">Удалить</button>
                            @endif
                        </form>
                    </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
