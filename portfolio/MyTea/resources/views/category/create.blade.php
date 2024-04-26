@extends('loyauts.app')
@section('content')

<div class="container mt-20">
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <h4 class="text-2xl mb-5">Название категории</h4>
        <input type="text" name="name" class="border-b border-black" value="{{old('name')}}">
        <button type="submit" class="bannerBtn border border-black text-2xl">add</button>
        @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
    </form>
</div>

@endsection