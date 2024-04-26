@extends('loyauts.app')
@section('content')

<section class="about__us">
    <div class="container">
        <div class="about__us__content">
            <div class="text__about">
                <p class="title">We take care of each of our customers</p>
                <div class="logo">
                    <h2 class="logo__txt">ForChildren</h2>
                    <img src="public/assets/img/mainImg/logo.png" alt="" class="logo__img">
                </div>
            </div>

            

            <div class="slider-container">
                <div class="slider">
                    @foreach ($products as $item)
                    <div class="img_sl">
                        <img src="{{$item->getImageUrl()}}" alt="Белый пушистый кот" width="400px" class="img_sl">
                        <div class="slide__txt">{{$item->name}}</div>
                    </div>
                    @endforeach
                </div>
                <button class="prev-button" aria-label="Посмотреть предыдущий слайд" onclick="prev()" id="prev_btn" style="transform: rotate(180deg);">→</button>
                <button class="next-button" aria-label="Посмотреть следующий слайд" onclick="next()" id="next_btn">→</button>
              </div>


        </div>

    </div>
</section>

@endsection