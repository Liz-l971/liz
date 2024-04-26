@extends('loyauts.app')
@section('content')

<section class="journal">
    <div class="container">
        <div class="journal__content">
            <div class="category__block">
                <p class="title">
                    Categories
                </p>
                <div class="categories__list">
                @foreach ($categories as $items )
                    <a href="/journal/{{$items->id}}">{{$items->name}}</a>
                @endforeach
                    <a href="/journal" class="all__link">all</a>
                </div>
                <select name="" id="sortInput">
                    <option value="">Без фильтра</option>
                    <option value="ask">Сначала дорогие</option>
                    <option value="desk">Сначала дешевые</option>
                </select>
            </div>
            <div class="product__list">
                {{-- @foreach ($products as $item)
                    <div class="product__cart">
                        <img src="{{$item->getImageUrl()}}" alt="" class="product__img">
                        <div class="product__item">
                            <a href="{{route('product.show',$item->id)}}"><p class="product__name">{{$item->name}}</p></a>
                            <div class="cost__basket">
                                <p class="product__cost">{{$item->price}} $</p>
                                @if($item->basket($item->id)==null)
                                <a href="/basket/{{ $item->id }}">
                                    <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-basket"
                                        fill="#98d3f3" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </a>
                            @endif
                            @if ($item->basket($item->id)!=null)
                            <div class="counter_b">

                                <a href="/basket/{{ $item->id }}">+</a>
                                {{ $item->basket($item->id)->count }}
                                <a href="/basket/{{ $item->id }}/removeBasket">-</a>
                            </div>

                            @endif
                            </div>
                        </div>
                    </div>
                @endforeach --}}
                
                   
                    </div>    
            </div>
        </div>
    </div>
</section>




@endsection