@extends('loyauts.app')
@section('title')
    Добавить задание
@endsection
@section('content')
    <section class="add">
        <div class="container">
            <div class="add_conent">
                <h3 class="h3">Добавить задание</h3>
                <form action="/tasks/addTask" class="add_form" method="POST" name="add" enctype="multipart/form-data">
                    @csrf
                    <label class="inputs_edit_profiles_txt">
                        <input type="text" placeholder="Что необходимо?..." class="input edit_long_inp add_inp"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                        @enderror
                        <textarea name="description" class="input edit_long_inp add_textarea" placeholder="Подробнее...">{{ old('description') }}</textarea>
                        @error('description')
                            <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                        @enderror
                        <label for="" class="add_txt_time">
                            <h6 class="h6med">До какого времени нужно сделать?</h6>
                        </label>
                        <input type="date" class="input edit_short_inp add_inp" placeholder="Время на выполнение"
                            name="date" value="{{ old('date') }}">

                        <input type="time" class="input edit_short_inp add_inp" name="time"
                            value="{{ old('time') }}">
                        <input type="text" class="input edit_short_inp add_inp" placeholder="Цена" name="cost"
                            value="{{ old('cost') }}">
                        @error('date')
                            <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                        @enderror
                        @error('time')
                            <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                        @enderror
                        @error('cost')
                            <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                        @enderror
                        @error('invalid_date')
                            <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                        @enderror
                        @error('invalid_balance')
                            <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                        @enderror
                        <select name="category_id" class="input edit_med_inp">
                            <option value="0">Выберите категорию</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ (old('category_id') == $category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                        </select>
                        @error('category_id')
                            <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                        @enderror
                    </label>

                    <input type="file" value="прикрепите дополнительные файлы" name="file">
                    @error('file')
                        <h6 class="h6"><span class ="red">{{ $message }}</span></h6>
                    @enderror
                    {{-- // <h6 class="h6"><span class ="red">'.$errors.'</span></h6>'; --}}

                    <input type="submit" class="btn_one add_btn" value="Добавить" name="add">

                </form>

            </div>
        </div>
    </section>
@endsection
