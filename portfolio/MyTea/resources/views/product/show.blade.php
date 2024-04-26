@extends('loyauts.app')
@section('content')
    <div class="container">
        <div class="pt-20 flex gap-10">
            <img src="{{$product->getImageurl()}}" alt="" style="width: 600px; height:450px; object-fit:cover;">
            <div class="flex-column gap-3">
                
                <div><p class="text-3xl pb-5">{{$product->name}}</p></div>
                <div><p class="text-3xl pb-5">{{$product->category->name}}</p></div>
                <div><p class="text-2xl pb-5">{{$product->description}}</p></div>
                <div><p class="text-4xl pb-5"><b>{{$product->price}} rub</b></p></div>
                <button class="bannerBtn border border-black"><p class="text-2xl">Buy</p></button>
                
            </div>
        </div>
    </div>
@endsection