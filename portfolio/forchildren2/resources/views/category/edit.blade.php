@extends('loyauts.app')
@section('content')
<section class="sign__up">
    <div class="container">
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <h4 class="input__text">Название категории</h4>
        <input type="text" name="name" class="input" value="{{$category->name}}">
        <button type="submit" class="button__main button__dark">Save</button>
        @error('name') <p class="error">{{ $message }}</p> @enderror
    </form>
</div>
</section>
@endsection