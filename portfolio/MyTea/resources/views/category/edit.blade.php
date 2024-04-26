@extends('loyauts.app')
@section('content')
<div class="container mt-20">
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <h4 class="text-2xl mb-5">Название категории</h4>
        <input type="text" name="name" class="border-b border-black" value="{{$category->name}}">
        <button type="submit" class="bannerBtn border border-black text-2xl">Save</button>
        @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
    </form>
</div>
@endsection