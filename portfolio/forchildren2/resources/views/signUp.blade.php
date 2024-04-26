

@extends('loyauts.app')
@section('content')

<main>

    <iframe src="" frameborder="0" id="signUp" name="signUp"></iframe>
    <section class="sign__up">
        <div class="container">
            <p class="title">Sign Up</p>
                <form id="signupForm" action="{{route('auth.registr')}}" target="signUp" method="POST">
                    @csrf
                    <h4 class="input__text">name</h4>
                    <input type="text" name="name" value="{{ old('name') }}" class="input" style="width: 400px"><br><br>

                    {{-- @error('name') <p class="name">{{ $message }}</p> @enderror --}}
                    
                    <h4 class="input__text">surname</h4>
                    <input type="text" name="surname" value="{{ old('surname') }}" class="input" style="width: 400px"><br><br>

                    {{-- @error('surname') <p class="surname">{{ $message }}</p> @enderror --}}

                    <h4 class="input__text">patronymic</h4>
                    <input type="text" name="patronymic" value="{{ old('patronymic') }}" class="input" style="width: 400px"><br><br>

                    {{-- @error('patronymic') <p class="patronymic">{{ $message }}</p> @enderror --}}
                    

                    <h4 class="input__text">email</h4>
                    <input type="text" name="email"  value="{{ old('email') }}" class="input" style="width: 400px"><br><br>
                    <span id="error-email" class="error-message"></span>
                    {{-- @error('email') <p class="error">{{ $message }}</p> @enderror --}}

                    <h4 class="input__text">login</h4>
                    <input type="text" name="login"  value="{{ old('login') }}" class="input" style="width: 400px"><br><br>

                    {{-- @error('login') <p class="error">{{ $message }}</p> @enderror --}}

                    <h4 class="input__text">password</h4>
                    <input type="password" name="password" value="{{ old('password') }}" class="input" style="width: 400px"><br><br>

                    {{-- @error('password') <p class="error">{{ $message }}</p> @enderror --}}

                    <h4 class="input__text">repeat password</h4>
                    <input type="password" name="password_r"  value="{{ old('password_r') }}" class="input" style="width: 400px"><br><br>
                    {{-- @error('password_r') <p class="error">{{ $message }}</p> @enderror --}}

                    <button type="submit" class="button__main button__dark" style="width: 400px">Sign in</button>
                </form>
            </div>
    </section>
    </main>

    {{-- <script>

        let errors = {!! json_encode($errors->all()) !!};
        console.log(errors)

        document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Отменяем стандартное поведение формы

    var formData = new FormData(this);

    fetch("{{route('auth.registr')}}", {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        document.getElementById('result').innerHTML = data.message;
    })
    .catch(error => console.error('Ошибка:', error));
});
// if (errors.length > 0) {
//     // Обработка ошибок
//     // alert('as');
// }
// document.getElementById('signupForm').addEventListener('submit', function(event) {
//     event.preventDefault();
    
//     let formData = new FormData(this);
    
//     fetch('{{ route('auth.registr') }}', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.errors) {
//             // Вывод сообщений об ошибках
//             Object.keys(data.errors).forEach(function(key) {
//                 let errorMessages = data.errors[key].join(', ');
//                 document.getElementById('error-' + key).textContent = errorMessages;
//             });
//         } else {
//             // Успешная обработка формы, выполните необходимые действия
//         }
//     })
//     .catch(error => console.error('Ошибка:', error));
// });
    </script> --}}
@endsection
