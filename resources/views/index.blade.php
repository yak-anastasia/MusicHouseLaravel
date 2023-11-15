@extends('layout')
@section('content')
  <div class="container">
    <div class="row text-center mt-4">
      <div class="col-12">
        <h1>Music House</h1>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12 description">
        <p>Магазин "Music House" - это уютное и стильное заведение, где любители музыки могут насладиться широким выбором
          инструментов, аксессуаров и аудио-техники. Внутри магазина царит атмосфера вдохновения и творчества.</p>
        <p>Магазин предлагает широкий ассортимент струнных, клавишных и смычковых музыкальных инструментов.
          Весь ассортимент продукции поставляется от ведущих мировых брендов, чтобы обеспечить клиентам высокое
          качество и превосходное звучание.</p>
        <p>Профессиональные сотрудники "Music House" всегда готовы помочь клиентам с выбором инструментов и ответить на все их вопросы.
          Они обладают обширными знаниями о музыке и технике, и с радостью поделятся своими советами и рекомендациями.</p>
        <p>Магазин "Music House" также организует различные мероприятия, такие как музыкальные концерты, мастер-классы
          и демонстрации новых инструментов и оборудования. Это позволяет клиентам насладиться живой музыкой и получить
          дополнительные знания о музыкальном мире.</p>
        <p>Независимо от уровня музыкального опыта и интенсивности интереса к музыке, "Music House" предоставляет все необходимое
           для того, чтобы клиенты могли развивать свой талант и наслаждаться звуком музыки.</p>
      </div>
    </div>
    <div class="row mt-4 mb-5">
      <div class="col-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="height: 750px">
              <img src="{{asset('img/DSC_0404.jpg')}}" class="d-block w-100" alt="Slide image">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item" style="height: 750px">
              <img src="{{asset('img/img_20201110_132647-1-scaled.jpg')}}" class="d-block w-100" alt="Slide image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item" style="height: 750px">
              <img src="{{asset('img/1688849888830548_f020.jpg')}}" class="d-block w-100" alt="Slide image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection
