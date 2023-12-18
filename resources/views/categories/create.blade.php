@extends('layout')
@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-12 text-center">
            <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <label class="form-label me-4" for="title">Название категории</label>
                    <input id="title" class="form-control rounded" name="title" type="text" placeholder="Введите название">
                </div>
                <button type="submit" class="btn btn-success mt-5">Добавить новую категорию</button>
            </form>
        </div>
    </div>
@endsection
