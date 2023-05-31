<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
    <title>Kirish</title>
</head>
<body>
    <section>
        <div class="form-box card">
            <div class="form-value ">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Kirish</h2>
            <div class="inputbox">
                <ion-icon name="mail"></ion-icon>
                <input id="email" type="text" name="email" required :value="old('email')"  required autofocus autocomplete="username" >
                <label for="email">Emailingiz</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="inputbox">
                <ion-icon name="lock-closed" onclick="togglePasswordVisibility()"></ion-icon>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <label for="password">Parolingiz</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    

            <div class="flex items-center justify-end mt-4">
                <button>
                    {{ __('Kirish') }}
                </button>
            </div>
            <div class="register">
                <p>Sizda akkaunt yo'qmi? <a href="./register">Ro'yxatdan o'tish</a></p>
            </div>
            <div class="register">
                @if (Route::has('password.request'))
                <a class="forget mt-4" href="{{ route('password.request') }}">
                    {{ __('Parolingizni unutdingizmi?') }}
                </a>
            @endif
            </div>
           
        </form>
    </div>
</div>
</section>

    <script>
        function togglePasswordVisibility() {
            var password = document.getElementById("password");
            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
    </script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>


