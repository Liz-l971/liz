@extends('loyauts.app')
@section('content')

<section class="sign__up">
    <div class="container">
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <h4 class="input__text">Название категории</h4>
        <input type="text" name="name" class="input" value="{{old('name')}}">
        <button type="submit" class="button__main button__dark">add</button>
        @error('name') <p class="error">{{ $message }}</p> @enderror
    </form>
</div>
</section>


@endsection