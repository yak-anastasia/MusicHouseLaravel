@extends('layout')
@section('content')
  <div class="container">
    <div class="row justify-content-between mt-5 align-items-center">
      <div class="col-6">
        <h1 class="mb-5">Как нас найти</h1>
        <p class="h2">Москва, Новокуркинское ш., 51</p>
        <p class="h3 mt-4 mb-4">8 (957) 262-45-18</p>
        <p class="h3">musichouse@gmail.com</p>
      </div>
      <div class="col-6">
        <div class="map">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3acdcfe573d20aa3b38ad7a2ff91682778245b41f7120be3149ffcbb22c34176&amp;source=constructor" width="618" height="774" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection