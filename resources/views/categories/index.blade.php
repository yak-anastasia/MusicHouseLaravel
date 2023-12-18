@extends('layout')
@section('content')

<div class="row">
    <div class="col-12 text-center mt-4 mb-3">
      <h1>Категории</h1>
    </div>
    @foreach ($categories as $category)
        <div class="col-12 d-flex justify-content-center mt-2">
            <div class="card" style="width: 38rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">{{$category->title}}
                        <a href="{{route('categories.edit', $category)}}" class="btn btn-success w-30">Редакт.</a>
                        <form action="{{route('categories.destroy', $category)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-30">Удалить</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
    <div class="col-12 d-flex justify-content-center">
        <a href="{{route('categories.create')}}" class="btn btn-success mt-4">Добавить новую категорию</a>
    </div>
</div>
@endsection
