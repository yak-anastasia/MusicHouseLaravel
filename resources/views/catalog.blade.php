@extends('layout')
@section('content')
  <div class="container">
    <div class="row text-center mt-4">
      <div class="col-12">
        <h1>Наши товары</h1>
      </div>
    </div>
  </div>

  <div class="container">
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
  </div>

  <div class="container">
    <div class="row mb-5">
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <a href="{{route('product')}}" class="text-decoration-none link-dark"><img src="{{asset('img/Vintage_bas-guitar.jpg')}}" class="card-img-top" alt="Bas-guitar"></a>
          <div class="card-body">
            <a href="{{route('product')}}" class="text-decoration-none link-dark">
              <h5 class="card-title">Бас-гитара Vintage VJ75MBK</h5>
            </a>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">29 990 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('img/Midi_keyboard.jpg')}}" class="card-img-top" alt="Midi keyboard">
          <div class="card-body">
            <h5 class="card-title">Midi клавиатура Donner Music D-37</h5>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">15 990 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('img/Electro-acoustic_guitar.jpg')}}" class="card-img-top" alt="Electro-acoustic guitar">
          <div class="card-body">
            <h5 class="card-title">Электроакустическая гитара Godin Metropolis Composer EQ</h5>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">129 990 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('img/Violin.jpg')}}" class="card-img-top" alt="Violin">
          <div class="card-body">
            <h5 class="card-title">Cкрипка Kryštof Edlinger E9A0</h5>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">8 990 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('img/Piano.jpg')}}" class="card-img-top" alt="Acoustic Piano">
          <div class="card-body">
            <h5 class="card-title">Акустический рояль Kawai GL10 M/ PEP</h5>
          </div>
          <div class="card-footer text-center d-flex justify-content-between">
            <h5 class="card-text mt-2">1 900 000 р.</h5>
            <button type="button" class="btn btn-danger w-50">В корзину</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection