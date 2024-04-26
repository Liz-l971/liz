@extends('loyauts.app')
@section('content')

<section class="profile">
    <div class="container">
        <div class="profile__content">
            <p class="title">Basket</p>
            <div class="basket__main__content">
                <div class="basket__list">
                    @foreach ($order as $item)
                    <div class="product__cart">
                        <img src="{{$item->getProduct($item->id_product)->getImageUrl()}}" alt="" class="product__img">
                        <div class="product__item">
                            <a href="{{route('product.show',$item->id)}}"><p class="product__name">{{$item->name}}</p></a>
                            <div class="cost__basket">
                                <p class="product__cost">{{$item->price}} $</p>
                                <a href="/basket/{{$item->getProduct($item->id_product)->id }}">+</a>
                                {{ $item->count }}
                                <a href="/basket/{{$item->getProduct($item->id_product)->id }}/removeBasket">-</a>
                            </div>
                        </div>
                    </div>     
                    @endforeach
                </div>
                <div class="make__order">

                    <p class="order_info">{{$sum}} $</p>
                    <p class="order_info">{{$count}} pieces</p>

                    <a href="/order" class="button__main button__dark">
                        <p class="make__order_txt">Make order</p>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection