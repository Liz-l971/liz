@extends('loyauts.app')
@section('content')

<div class="container mt-20">
    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data" style="width:400px">
        @csrf
        @method('PATCH')
        <h4 class="text-2xl mb-5">name</h4>
        <input type="text" name="name" class="border-b border-black" value="{{ $product->name }}" style="width:400px"><br><br>
        @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
        <h4 class="text-2xl mb-5">description</h4>
        <input type="text" name="description" class="border-b border-black" value="{{$product->description }}" style="width:400px"><br><br>
        @error('description') <p class="text-red-500">{{ $message }}</p> @enderror
        <h4 class="text-2xl mb-5">price</h4>
        <input type="number" name="price" class="border-b border-black" value="{{$product->price }}" style="width:400px"><br><br>
        @error('price') <p class="text-red-500">{{ $message }}</p> @enderror
    
        <h4 class="text-2xl mb-5">category</h4>
    
        <select name="category_id" style="width:400px" class="border-b border-black">
            <option value="{{ $product->category->id }}">{{$product->category->name}}</option>
            @foreach ($category as $items)
                <option value="{{ $items->id }}">{{$items->name}}</option>
            @endforeach
        </select><br><br>
        @error('category_id') <p class="text-red-500">{{ $message }}</p> @enderror
    
        <input type="file" name="img"><br><br>
        @error('img') <p class="text-red-500">{{ $message }}</p> @enderror
        <button type="submit" class="bannerBtn border border-black text-2xl" style="width:400px">Save</button>
        
    </form>
</div>
@endsection