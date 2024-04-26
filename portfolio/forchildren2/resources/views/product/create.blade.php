@extends('loyauts.app')
@section('content')
<section class="sign__up">
    <div class="container">
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" style="width:400px">
        @csrf
        <h4 class="input__text">name</h4>
        <input type="text" name="name" class="input" value="{{ old('name') }}" style="width:400px"><br><br>
        @error('name') <p class="error">{{ $message }}</p> @enderror

        <h4 class="input__text">description</h4>
        <input type="text" name="description" class="input" value="{{ old('description') }}" style="width:400px"><br><br>
        @error('description') <p class="error">{{ $message }}</p> @enderror

        <h4 class="input__text">price</h4>
        <input type="number" name="price" class="input" value="{{ old('price') }}" style="width:400px"><br><br>
        @error('price') <p class="error">{{ $message }}</p> @enderror
    
        <h4 class="input__text">category</h4>
    
        <select name="category_id" style="width:400px" class="input">
            
            @foreach ($category as $items)
                <option value="{{ $items->id }}">{{$items->name}}</option>
            @endforeach
        </select><br><br>
        @error('category_id') <p class="error">{{ $message }}</p> @enderror

    
        <input type="file" name="img"><br><br>
        @error('img') <p class="error">{{ $message }}</p> @enderror
        <button type="submit" class="button__main button__dark" style="width:400px">Add</button>
        
    </form>
</div>
</section>
@endsection
