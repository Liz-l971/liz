@extends('loyauts.app')
@section('content')

<section class="profile">
    <div class="container">
        <div class="profile__content">
            <p class="title">My profile</p>
              
        <p class="profile__text">
            {{auth()->user()->name}} {{auth()->user()->surname}} {{auth()->user()->patronymic}}
        </p>
        <div class="orders__list">
            @foreach ($baskets as $item)
            <div class="order__card">
                <div class="list_order_products">
                    @foreach ($item->getOrders($item->id) as $order)
                    <div class="order__product">
                        <p>{{$order->getProduct($order->id_product)->name}}</p><p>{{$order->count}}</p>

                    </div>
                @endforeach
                </div>
                <p class="sum">{{$item->getSum($item->id)}}$</p>
                @if($item->status==1)
                <p class="status" style="color:darkgoldenrod">В обработке</p>
                @endif
                @if($item->status==2)
                <p class="status" style="color:green">Завершен</p>
                @endif
                @if($item->status==3)
                <p class="status" style="color:red">Отклонен</p>
                @endif
            </div>
            @endforeach
        </div>
        </div>

    </div>
</section>

@endsection