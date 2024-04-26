@extends('loyauts.app')
@section('content')
    <section class="admin__orders">
        <div class="container">
            <div class="admin__orders__content">
                    <p class="title">Categories</p>
                    <div class="categories__list">
                    @foreach ($categories as $items)
                    <div class="admin_cat">
                        <div class="edit_cat_det">
                            <a href="{{ route('category.edit', $items->id) }}" style="background: none;padding:none;">✏️</a>
                            <form action="{{ route('category.destroy', $items->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">❌</button>
                            </form>
                        </div>
                        <a>{{ $items->name }}</a> 
                    </div>
                            
                    @endforeach
                    </div>

                <div>
                    <a href="/category/create" class="button__main button__dark">add category</a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin__orders">
        <div class="container">
            <div class="admin__orders__content">
        <p class="title">Products</h1>
            <div class="products__admin__list">
                @foreach ($products as $item)
                <div class="product__admin__item">
                    <div class="prod__info__admin">
                        <h4 class="name__prod">{{ $item->name }}</h4>
                        <p class="desc__prod">{{ $item->description }}</p>
                    </div>
                        <div class="edit_cat_det">
                            <a href="{{ route('product.edit', $item->id) }}">✏️</a>
                            <form action="{{ route('product.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">❌</button>
                            </form>
                        </div>
                    
                    <hr>
                </div>
            @endforeach
            </div>
      
    </div>
    <a href="product/create" class="button__main button__dark">add product</a>


    </div>
</div>
</div>
</section>


    <section class="admin__orders">
        <div class="container">
            <div class="admin__orders__content">
                <p class="title">Orders</p>
                <div class="categories__list">
                    <a href="/admin/orders/1">New</a>
                    <a href="/admin/orders/2">Completed</a>
                    <a href="/admin/orders/3">Rejected</a>
                </div>
                <div class="orders__list__admin">
                    @foreach ($baskets as $item)
                        <div class="order__card">
                            <p class="order__fio">
                                {{ $item->getUser($item->id_user)->name }} {{ $item->getUser($item->id_user)->surname }}
                                {{ $item->getUser($item->id_user)->patronymic }}
                            </p>
                            <div class="list_order_products">
                                @foreach ($item->getOrders($item->id) as $order)
                                    <div class="order__product">
                                        <p>{{ $order->getProduct($order->id_product)->name }}</p>
                                        <p>{{ $order->count }}</p>

                                    </div>
                                @endforeach
                            </div>
                            <div class="prinyat">
                                <div>
                                    <p class="sum">{{ $item->getSum($item->id) }}$</p>
                                    @if ($item->status == 1)
                                        <p class="status" style="color:darkgoldenrod">Новый</p>
                                    @endif
                                    @if ($item->status == 2)
                                        <p class="status" style="color:green">Завершен</p>
                                    @endif
                                    @if ($item->status == 3)
                                        <p class="status" style="color:red">Отклонен</p>
                                    @endif
                                </div>
                                <div class="prinyat__btns">
                                    <a href="/accept/{{ $item->id }}" class="button__main button__dark">
                                        Accept
                                    </a>
                                    <a href="/reject/{{ $item->id }}" class="button__main button__light">
                                        Reject
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
