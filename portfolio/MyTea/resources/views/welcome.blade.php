

@extends('loyauts.app')
@section('content')


    <main>
        <div class="container flex justify-between">

                <div class="whiteBlock_banner">
                    <div class="flex flex-col gap-5 items-start">
                        <h1 class="text-5xl">The best teas are only available here</h1>
                        <h4 class="text-lg">Place an order right now</h4>
                        <a href="" class="bannerBtn border border-black">Make Order</a>
                    </div>
                </div>
                <img class="bannerImg" src="assets/img/banner/banner.jpg" alt="main photo">
            </div>
            <div class="container">
                <h1 class="text-5xl mt-20">Catalog</h1>
                <div class="pt-20 flex flex-wrap items-center gap-10 justify-between">
                    @foreach ($products as $item)
                    <a href="{{route('product.show',$item->id)}}">
                        <div class="border border-black p-5" style="border-radius:10px; width:350px;">
                            <img src="{{ $item->getImageUrl() }}" alt="cart of product" style="width: 300px; height:200px; object-fit:cover;">
                            <div class="pt-5">
                                <h4 class="text-lg">{{$item->name}}</h4>
                                <h4 class="text-lg"><b>{{$item->price}} rub</b></h4>
                                <h4 class="text-lg">Category: {{$item->category->name}}</h4>
                            </div>
                        </div>
                    </a>
                @endforeach
                </div>
            </div>
    </main>
@endsection
