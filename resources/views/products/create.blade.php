@extends('layout')
@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-6 text-center">
            <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data" class="mb-5">
               @csrf
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="name">Название товара</label>
                    <input id="name" class="form-control rounded" name="title" type="text" placeholder="Введите название товара" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="description">Описание</label>
                    <input id="description" class="form-control rounded" name="description" type="text" placeholder="Введите описание" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="price">Цена</label>
                    <input id="price" class="form-control rounded" name="price" type="text" placeholder="Введите цену" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="model">Модель</label>
                    <input id="model" class="form-control rounded" name="model" type="text" placeholder="Введите модель" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="year">Год выпуска</label>
                    <input id="year" class="form-control rounded" name="year" type="number" placeholder="Введите год выпуска" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="country">Страна-производитель</label>
                    <input id="country" class="form-control rounded" name="country" type="text" placeholder="Введите страну-производитель" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="qty">Количество</label>
                    <input id="qty" class="form-control rounded" name="qty" type="number" placeholder="Введите количество" required>
                </div>
                <div class="input-group mb-4">
                    <label for="img" class="form-label pe-4">Изображение</label>
                    <input type="file" class="form-control" id="img" name="img" required>
                </div>
                <div class="input-group mb-4">
                    <label for="category_id" class="form-label pe-4">Категория</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success mb-5">Добавить новый товар</button>
            </form>
        </div>
    </div>
@endsection
