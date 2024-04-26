@extends('loyauts.app')
@section('content')

<div class="container">
    <div class="pt-10 pb-10">
        <h1 class="text-5xl pb-10">Категории</h1>
        @foreach ($categories as $items )
        <div class="flex items-start justify-between py-5 mb-10">
            <h4 class="text-2xl">{{$items->name}}</h4>
            <div class="flex gap-2">
                <a href="{{route('category.edit', $items->id)}}">Edit</a>
                <form action="{{ route('category.destroy', $items->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
        <hr>
            @endforeach     
    </div>

    <div>
        <a href="category/create" class="bannerBtn border border-black text-2xl">add category</a>   
    </div>
    <div class="pt-20 pb-10">
        <h1 class="text-5xl pb-10">Товары</h1>
        {{-- {{$products = Product::all()}} --}}
        @foreach ($products as $item)
        <div class="flex items-start justify-between py-5 mb-10">
            <h4 class="text-2xl">{{ $item->name }}</h4>
        <p class="w-[20%]">{{ $item->description }}</p>
        <div class="flex gap-2">
            <a href="{{route('product.edit', $item->id)}}">Edit</a>
            <form action="{{ route('product.destroy', $item->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        </div>
        <hr>
        @endforeach
    </div>
    <a href="product/create" class="bannerBtn border border-black text-2xl">add product</a>

</div>



@endsection