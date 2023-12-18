@extends('layout')
@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-12 text-center">
            <form method="POST" action="{{route('products.update',$product)}}" class="mb-5">
               @csrf
               @method('PUT')
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="title">Название товара</label>
                    <input id="title" class="form-control rounded" name="title" type="text" value="{{$product->title}}" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="description">Описание</label>
                    <input id="description" class="form-control rounded" name="description" type="text" value="{{$product->description}}" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="price">Цена</label>
                    <input id="price" class="form-control rounded" name="price" type="text" value="{{$product->price}}" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="model">Модель</label>
                    <input id="model" class="form-control rounded" name="model" type="text" value="{{$product->model}}" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="year">Год выпуска</label>
                    <input id="year" class="form-control rounded" name="year" type="number" value="{{$product->year}}" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="country">Страна-производитель</label>
                    <input id="country" class="form-control rounded" name="country" type="text" value="{{$product->country}}" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="qty">Количество</label>
                    <input id="qty" class="form-control rounded" name="qty" type="number" value="{{$product->qty}}" required>
                </div>
                <div class="input-group mb-4">
                    <label for="img" class="form-label pe-4">Изображение</label>
                    <input type="file" class="form-control" id="img" name="img" value="{{$product->img_path}}">
                </div>
                <div class="input-group mb-4">
                    <label for="category_id" class="form-label pe-4">Категория</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Принять новые изменения</button>
            </form>
        </div>
    </div>
@endsection
