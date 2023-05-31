<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
    <title>Ro'yxatdan o'tish</title>
</head>

<body>
    <section>
        <div class="form-box card">
            <div class="form-value ">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    {{-- <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input  class="block mt-1 w-full" type="text" 
                            />
                      
                    </div> --}}

                    <h2>Ro'yxatdan o'tish</h2>
                    <div class="inputbox">
                        <ion-icon name="person"></ion-icon>
                        <input id="name" name="name" type="text" :value="old('name')" required autofocus autocomplete="name" >
                        <label for="name">Ismingiz</label>
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <!-- Email Address -->

                    <div class="inputbox">
                        <ion-icon name="mail"></ion-icon>
                        <input id="email" type="text" name="email"  :value="old('email')" required autocomplete="username">
                        <label for="email">Emailingiz</label>
                    </div>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <!-- Password -->

                    <div class="inputbox">
                        <ion-icon name="lock-closed" onclick="togglePasswordVisibility()"></ion-icon>
                        <input id="password" type="password" id="passwordInput" name="password" required autocomplete="new-password">
                        <label for="password">Parolingiz</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed" onclick="togglePasswordVisibility()"></ion-icon>
                        <input id="password_confirmation" type="password" id="passwordInput"  name="password_confirmation" required autocomplete="new-password">
                        <label for="password_confirmation">Parolingiz tasdiqlash</label>
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="ml-4">
                            {{ __("Ro'yxatdan o'tish") }}
                        </x-primary-button>
                    </div>
                    <div class="register">
                        <p>Sizda akkaunt bormi? <a href="./login">Akkauntga kirish</a></p>
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
