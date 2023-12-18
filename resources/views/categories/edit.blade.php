@extends('layout')
@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-12 text-center">
            <form method="POST" action="{{route('categories.update', $category)}}">
                @csrf
                @method('PUT')
                <div class="input-group">
                    <label class="form-label me-4" for="title">Название категории</label>
                    <input id="title" class="form-control rounded" name="title" type="text" value="{{$category->title}}">
                </div>
                <button type="submit" class="btn btn-success mt-5">Принять новые изменения</button>
            </form>
        </div>
    </div>
@endsection
